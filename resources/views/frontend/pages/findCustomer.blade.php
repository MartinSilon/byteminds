@extends('frontend.layouts.app')
@section('title', 'Nájsť zákazníka')
@section('style')
    <style>
        table thead th{
            color: #3d5a41 !important;
            font-size: 15px;
            font-weight: normal;
        }
        small{
            color: darkgrey;
        }
        label{
            color: #3d5a41 !important;
            font-size: 15px;
            font-weight: bold;
        }
        .header-text{
            color: #3d5a41 !important;
            font-weight: bold;
        }

    </style>
@endsection
@section('content')
    <div class="container-fluid text-white py-5 position-relative container-green headline-container "
         style="background-image: url('{{ asset( $photo->find(15)->getPath()) }}') ;">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12">

                    <h2 class="fw-bold text-center " style="color: #f1b800">{{$text->find(37)->text1}}</h2>
                </div>
            </div>
        </div>

    </div>
    <div class="siteBg py-5">
        <div class="container ">
            <div style="display: none" class="alert alert-success" id="response-message"></div>

            <div class="row content py-4 justify-content-center">

                <div class="col-4 text-center">
                    <label for="fullName" class="form-label">IČO zákazníka:</label>
                    <input type="text" class="form-control" id="ico" name="ico" placeholder="" required style="background-color: white">
                    <small>*{{$text->find(38)->text1}}</small>
                </div>
            </div>


            <div class="mt-3 row content py-4 justify-content-center px-0 bg-white" id="row-result" style="border: 1px solid #ddd;">
                <div class="col-12 px-3 mt-0 pt-0">
                    <table id="customers-table" class="w-100 table table-striped">
                        <thead class="border-bottom">
                        <tr>
                            <th style="width: 200px">IČO</th>
                            <th style="width: 200px">Štatút zákazníka</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div id="form_div" class="d-flex justify-content-end"></div>

                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                document.getElementById("ico").addEventListener("input", function () {
                    let ico = this.value;
                    if (ico.length > 8) {
                        this.value = ico.slice(0, 8);
                        ico = this.value;
                    }

                    let tableBody = document.querySelector("#customers-table tbody");
                    let formDiv = document.getElementById("form_div");

                    if (ico.length === 8) {
                        tableBody.innerHTML = `<tr><td colspan='3'>Načítavam...</td></tr>`;
                        formDiv.innerHTML = "";

                        let csrfTokenMeta = document.querySelector("meta[name='csrf-token']");
                        let csrfToken = csrfTokenMeta ? csrfTokenMeta.getAttribute("content") : "";

                        fetch("http://127.0.0.1:8001/api/getCustomerStatus", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": csrfToken
                            },
                            body: JSON.stringify({ ico: ico })
                        })
                            .then(response => response.json())
                            .then(data => {
                                tableBody.innerHTML = "";

                                if (data.customer && data.customer.ico) {
                                    let row = `<tr>
                                                    <td>${data.customer.ico}</td>
                                                    <td id="status_td">${data.customer.status}</td>
                                                </tr>`;
                                    tableBody.innerHTML = row;

                                    if (data.customer.status === "Voľný") {
                                        let csrfTokenMeta = document.querySelector("meta[name='csrf-token']");
                                        let csrfToken = csrfTokenMeta ? csrfTokenMeta.getAttribute("content") : "";

                                        formDiv.innerHTML = `
                                            <button id="reserve-btn" class="btn btn-success">Rezerovať zákazníka</button>
                                        `;

                                        document.getElementById("reserve-btn").addEventListener("click", function() {
                                            fetch("http://127.0.0.1:8001/api/customer/reserve", {
                                                method: "POST",
                                                headers: {
                                                    "Content-Type": "application/json",
                                                    "X-CSRF-TOKEN": csrfToken
                                                },
                                                body: JSON.stringify({
                                                    ico: ico,
                                                    merchant_nr: 4,
                                                    statut: 7
                                                })
                                            })
                                                .then(response => response.text())
                                                .then(result => {
                                                    // let responseMessageDiv = document.getElementById("response-message");
                                                    let status_td = document.getElementById("status_td");

                                                    // responseMessageDiv.style.display = "block";
                                                    // responseMessageDiv.innerText = "Zákazník bol úspešne rezervovaný.";
                                                    status_td.innerText = "Rezervovaný";


                                                    document.getElementById("reserve-btn").style.display = "none";
                                                })

                                        });
                                    }

                                }
                            })

                    }
                });
            });
        </script>

    </div>

@endsection

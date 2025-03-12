q<?php
    if (empty($type)){
        $type = 'text';
    }
    if (empty($id)){
        $id = $name;
    }
    if (empty($placeholder)){
        $placeholder = '';
    }
    if (empty($disabled)){
        $disabled = '';
    }
    if (empty($required)){
        $required = 0;
    }


?>
    @if(isset($label))
        <label class="form-label" for="{{ $id }}">{{ $label }} @if($required == 1) <span style="color: orangered">*</span> @endif </label>
    @endif

    <textarea
        id="{{ $id }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        rows="{{ $rows }}"
        class="form-control px-2 py-1 mb-3">{{ $value }}</textarea>


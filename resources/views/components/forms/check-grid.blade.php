{{-- create a checkbox with an inline label --}}
<div class="search--check--item">
    <label class="col-form-label" for="">{{$title}}</label>
    <input 
        class="form-check-input" 
        type="checkbox" 
        name="{{$colName}}"
    >
</div>

{{-- 
    title => title on label
    colName => column name from table
--}}
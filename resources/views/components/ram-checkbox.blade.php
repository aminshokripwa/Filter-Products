
<div class="d-inline-block mx-1" style="width: 70px;">
    <input type="checkbox" name="ram[]" value="{{$ram}}" @if(in_array($ram, request('ram') ?? [])) checked @endif>{{$ram}}GB
</div>

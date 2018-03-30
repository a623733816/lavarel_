<form method="post" action="" enctype="multipart/form-data" >
    <input type="file" name="myfile[]">
    <input type="file" name="myfile[]">
    {!! csrf_field() !!}
    <button type="submit"> 提交 </button>
</form>
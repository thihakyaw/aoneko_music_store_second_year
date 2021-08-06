<!-- Modal About -->

<div class = "modal fade" id = "upload" role="dialog">

<!-- Modal Dialog of About-->
<div class = "modal-dialog">

<!-- modal content -->
<div class = "modal-content">

<!--header-->
<div class = "modal-header" style = "background-color:#333333;">
<h3 align = "center" style="color:#ffffff;">Upload New Album Here</h3>
<!-- /header-->
</div>

<!--body-->
<div class = "modal-body">
<form action="../albumupload.php" method="post" enctype="multipart/form-data">
  <div class = "form-group">
  <label>Album Name : </label>
  <input class = "form-control" type ="text" placeholder="Album Name" name = "album_name">
  </div>

  <div class = "form-group">
  <label>Price : </label>
  <input class = "form-control" type ="text" placeholder="Album Price" name = "album_price">
  </div>

  <div class = "form-group">
  <label>Bandname : </label>
  <input class = "form-control" type ="text" placeholder="Bandname" name = "bandname">
  </div>

  <div class = "form-group">
  <label>Rating : </label>
  <input class = "form-control" type ="number" min="1" max="5" placeholder="Number of rates" name = "rating">
  </div>

  <div class = "form-group">
    <label>Album:</label>
    <input type = "file" name = "album" id = "album">
    <label>Image</label>
    <input type = "file" name = "image" id = "image">
    <input type = "submit" class = "btn btn-sm btn-primary" value="Submit">
  </div>
</form>
<!-- /body-->
</div>

<!--footer-->


<!-- /header-->
</div>

<!-- modal-didalog-->
</div>

</div>
<!-- modal fade-->
</div>

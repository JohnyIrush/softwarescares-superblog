<div class="card-header bg-color-red">
    <div class="row">
     <div class="col-5">
      <div class="form-check">
       <input class="form-check-input" type="checkbox" value="" id="SelectFile">
       <label class="form-check-label" for="SelectFile">
          Select
       </label>
      </div>
     </div>
     <div class="col-6">
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="fileoptions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Options
        </button>
        <!--file actions (delete,rename)-->
        <fileactions :id={{$doc->id}} ></fileactions>
        <!--
        <div class="dropdown-menu" aria-labelledby="fileoptions">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>        
        -->

      </div>
     </div>
    </div>
</div>
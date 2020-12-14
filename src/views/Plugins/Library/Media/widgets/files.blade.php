@if ($type=='image' && sizeof($images)>0  )
 <div class="row bg-color-darkblue ">
  <div class="col-12 card bg-color-darkblue">
      <div id="fileLibraryIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#fileLibraryIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#fileLibraryIndicators" data-slide-to="1"></li>
            <li data-target="#fileLibraryIndicators" data-slide-to="2"></li>
          </ol>
          <div  class="carousel-inner">
            <div class="carousel-item active">
            </div>
            @foreach ($images->chunk(8) as $imageGroup)>
            <div class="carousel-item">

            <div>
              <div class="row">
                @foreach ($imageGroup as $image)
                <div class="col-3">
                  <div class="card bg-color-dark">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                      <img src="{{$image->location}}" class="img-fluid" alt="" srcset="">
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>

            </div>
            @endforeach

          <a class="carousel-control-prev" href="#fileLibraryIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#fileLibraryIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
  </div>

</div>
@endif

@if ($type=='text' && sizeof($text)>0  )
 <div class="row bg-color-darkblue ">
  <div class="col-12 card bg-color-darkblue">
      <div id="fileLibraryIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#fileLibraryIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#fileLibraryIndicators" data-slide-to="1"></li>
            <li data-target="#fileLibraryIndicators" data-slide-to="2"></li>
          </ol>
          <div  class="carousel-inner">
            <div class="carousel-item active">
            </div>
            @foreach ($text->chunk(8) as $textGroup)
            <div class="carousel-item">
            <div>
              <div class="row">
                @foreach ($textGroup as $doc)
                <div class="col-3">
                  <div class="card bg-color-dark">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                      <img src="{{$doc->location}}" class="img-fluid" alt="" srcset="">
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            </div>
            @endforeach
          <a class="carousel-control-prev" href="#fileLibraryIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#fileLibraryIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
  </div>
</div>
@endif

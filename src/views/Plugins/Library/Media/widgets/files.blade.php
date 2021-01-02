@if ($type=='image' )
 <div class="row bg-color-darkblue align-items-center">
  <div class="col-12 card bg-color-darkblue">
     @if (sizeof($images)>0)
      <div id="fileLibraryIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#fileLibraryIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#fileLibraryIndicators" data-slide-to="1"></li>
            <li data-target="#fileLibraryIndicators" data-slide-to="2"></li>
          </ol>
          <div  class="carousel-inner">
            <div class="carousel-item active">
              <h1 class="text-primary text-center">Images</h1>
            </div>
            @foreach ($images->chunk(8) as $imageGroup)>
             <div class="carousel-item">
              <div>
                <div class="row">
                  @foreach ($imageGroup as $image)
                  <div class="col-3">
                    <div class="card bg-color-dark">
                      @include('superblog::Plugins.Library.Media.widgets.menus.imagesfileactions')
                      <div class="card-body">
                        <img src="{{$image->location}}" class="img-fluid" alt="" srcset="">
                      </div>
                      <div class="card-footer">
                        <p class="text-white text-center"> {{substr_replace ($image->location, " ", 0,16)}} </p>
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
     @else
      @include('superblog::Plugins.Library.Media.widgets.mediaempty')
     @endif
  </div>
 </div>
@endif

@if ($type=='text')
 <div class="row bg-color-darkblue ">
  <div class="col-12 card bg-color-darkblue">
    @if ( sizeof($text)>0)
      <div id="fileLibraryIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#fileLibraryIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#fileLibraryIndicators" data-slide-to="1"></li>
            <li data-target="#fileLibraryIndicators" data-slide-to="2"></li>
          </ol>
          <div  class="carousel-inner">
            <div class="carousel-item active">
              <h1 class="text-primary text-center">Text Files</h1>
            </div>
            @foreach ($text->chunk(8) as $textGroup)>
             <div class="carousel-item">
              <div>
                <div class="row">
                  @foreach ($textGroup as $doc)
                   <div class="col-3">
                     <div class="card bg-color-dark">
                       @include('superblog::Plugins.Library.Media.widgets.menus.textfileactions')
                       <div class="card-body">
                         <embed width="100%" height="100%" src="{{$doc->location}}">
                       </div>
                       <div class="card-footer">
                        <p class="text-white text-center"> {{substr_replace ($doc->location, " ", 0,19)}} </p>
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
    @else
      @include('superblog::Plugins.Library.Media.widgets.mediaempty')
    @endif
  </div>
 </div>
@endif


@if ($type=='video')
 <div class="row bg-color-darkblue ">
  <div class="col-12 card bg-color-darkblue">
    @if (sizeof($videos)>0)
     <div id="fileLibraryIndicators" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
         <li data-target="#fileLibraryIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#fileLibraryIndicators" data-slide-to="1"></li>
         <li data-target="#fileLibraryIndicators" data-slide-to="2"></li>
       </ol>
       <div  class="carousel-inner">
         <div class="carousel-item active">
           <h1 class="text-primary text-center">Videos</h1>
         </div>
         @foreach ($videos->chunk(4) as $videoGroup)>
          <div class="carousel-item">
           <div>
             <div class="row">
                  @foreach ($videoGroup as $video)
                   <div class="col-6">
                     <div class="card bg-color-dark">
                       @include('superblog::Plugins.Library.Media.widgets.menus.videosfileactions')
                       <div class="card-body">
                           <video width="100" height="100" controls>
                             <source src="{{$video->location}}" type="video/mp4">
                           </video>
                       </div>
                       <div class="card-footer">
                        <p class="text-white text-center"> {{substr_replace ($video->location, " ", 0,16)}} </p>
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
     @else
      @include('superblog::Plugins.Library.Media.widgets.mediaempty')
    @endif 
  </div>
 </div>
@endif

@if ($type=='audio')
 <div class="row bg-color-darkblue ">
  <div class="col-12 card bg-color-darkblue">
    @if (sizeof($audios)>0)
     <div id="fileLibraryIndicators" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
         <li data-target="#fileLibraryIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#fileLibraryIndicators" data-slide-to="1"></li>
         <li data-target="#fileLibraryIndicators" data-slide-to="2"></li>
       </ol>
       <div  class="carousel-inner">
         <div class="carousel-item active">
           <h1 class="text-primary text-center">Audios</h1>
         </div>
         @foreach ($audios->chunk(4) as $audioGroup)>
          <div class="carousel-item">
           <div>
             <div class="row">
               @foreach ($audioGroup as $audio)
               <div class="col-6">
                 <div class="card bg-color-dark">
                   @include('superblog::Plugins.Library.Media.widgets.menus.audiosfileactions')
                   <div class="card-body">
                       <audio controls>
                         <source src="{{$audio->location}}" type="audio/mpeg">
                       </audio>
                   </div>
                   <div class="card-footer">
                    <p class="text-white text-center"> {{substr_replace ($audio->location, " ", 0,16)}} </p>
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
    @else
     @include('superblog::Plugins.Library.Media.widgets.mediaempty')
    @endif
  </div>
 </div>
@endif






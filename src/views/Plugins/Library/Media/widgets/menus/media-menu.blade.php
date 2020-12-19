<div class="row bg-color-darkblue  justify-content-center">
    <div class="col-3 card bg-color-dark">
        <diskcapacity></diskcapacity>
    </div>
    <div class="col-8 card bg-color-darkblue">
        <div class="row  mt-1 mb-1 justify-content-center">
         <div class="col-sm-4 justify-content-center">
          <div class="card bg-color-dark text-center">
            <div class="card-body">
                <p class="text-white">Total Files
                    {{$totalFilesCount}}
                </p>
            </div>
          </div>
         </div>
        </div>
        <div class="row   mb-1 justify-content-center">
            <div class="col-sm-4 justify-content-center">
                <div class="card bg-color-dark text-center">
                  <div class="card-header">
                      <h3 class="card-title text-primary">Videos</h3>
                  </div>
                  <div class="card-body">
                    <p class="text-white">Total Videos
                        {{$videosCount}}
                    </p>
                    <a href="{{route('videos')}}" class="btn btn-primary">View Videos</a>
                </div>
               </div>
            </div>
            <div class="col-sm-4 justify-content-center">
                <div class="card bg-color-dark text-center">
                  <div class="card-header">
                      <h3 class="card-title text-primary">Images</h3>
                  </div>
                  <div class="card-body">
                    <p class="text-white">Total Images
                        {{$imagesCount}}
                    </p>
                    <a href="{{route('images')}}" class="btn btn-primary">View Images</a>
                  </div>
               </div>
            </div>
        </div>
        <div class="row   mb-1 justify-content-center">
            <div class="col-sm-4 justify-content-center">
                <div class="card bg-color-dark text-center">
                  <div class="card-header">
                      <h3 class="card-title text-primary">audios</h3>
                  </div>
                  <div class="card-body">
                    <p class="text-white">Total audios
                        {{$audiosCount}}
                    </p>
                    <a href="{{route('audios')}}" class="btn btn-primary">View Audios</a>
                </div>
               </div>
            </div>
            <div class="col-sm-4 justify-content-center">
                <div class="card bg-color-dark text-center">
                  <div class="card-header">
                      <h3 class="card-title text-primary">Text</h3>
                  </div>
                  <div class="card-body">
                    <p class="text-white">Total Text
                        {{$textCount}}
                    </p>
                    <a href="{{route('text')}}" class="btn btn-primary">View Text</a>
                  </div>
               </div>
            </div>
        </div>
    </div>
</div>
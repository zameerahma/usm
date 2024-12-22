<x-header />

      
      <div class="site-section-cover overlay" style="background-image: url('images/hero_bg.jpg');">
        
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 text-center">
              <h1>ADD<strong>Tutorials</strong></h1>
            </div>
          </div>
        </div>
      </div>

      @if (session()->has('success'))
      <div class="alert alert-success">
        {{ session()->get('success')}}
      </div>
      @endif
      

      <div class="site-section bg-light" id="contact-section">
        <div class="container">
          <div class="row">
            <div class="col-3"></div>
            <div class="col-6 mb-5" >
            
              <form action="{{ URL::to('/CreateTutorials') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                  
                  <div class="col-12 mb-4 mb-lg-0">
                    <input type="text" name="title" class="form-control" placeholder="Course Title">
                  </div>
  
                </div>
  
                <div class="form-group row">
                  <div class="col-12">
                    <input type="text" name="duration" class="form-control" placeholder="Course Duration">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-12">
                    <input type="text" name="description" class="form-control" placeholder="Course Description">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-12">
                    <input type="file" name="image" id="">
                  </div>
                </div>
  
                
                
                <div class="form-group row">
                  <div class="col-12 mr-auto">
                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Add Course">
                  </div>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>

<x-footer />       
  


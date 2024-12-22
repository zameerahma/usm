<x-header />


    <div class="site-section-cover overlay" style="background-image: url('images/hero_bg.jpg');">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-10 text-center">
            <h1><strong>Register Yourself</strong></h1>
          </div>
        </div>
      </div>
    </div>

   @if (session()->has('error'))
   <div class="alert alert-danger">
  {{ session()->get('error') }}
   </div>
     
   @endif


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6 mb-5" >
          
            <form action="{{ URL::to('/reg') }}" method="post">
              @csrf
              <div class="form-group row">
                
                <div class="col-12 mb-4 mb-lg-0">
                  <input type="text" name="name" class="form-control" placeholder="User name">
                </div>

              </div>

              <div class="form-group row">
                <div class="col-12">
                  <input type="text" name="email" class="form-control" placeholder="Email address">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-12">
                  <select class="form-control" name="role" id="role">
                      <option value="student">Student</option>
                      <option value="teacher">Teacher</option>
                  </select>
                </div>
              </div>
              <div class="form-group row" id="designation" style="display: none;">
                <div class="col-12">
                  <input type="text" name="designation" class="form-control" placeholder="Designation" >
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-12 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Register">
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

   <x-footer />

<script>
  document.getElementById('role').addEventListener('change', function(){
    const designation = document.getElementById('designation');
    if(this.value == 'teacher'){
      designation.style.display='block';
    }
    else{
      designation.style.display='none';
    }
  });
</script>
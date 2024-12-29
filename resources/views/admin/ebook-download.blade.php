@extends('admin.layouts.app')
@section('title', 'Contact Form')
@section('custom-css') 
 

@endsection

@section('content')

    <div class="blog_listttt_content">
        <div class="content_header">
            <h3>E-Book List</h3>
            <div class="contact_letest">
                <select name="" id="">
                    <option value="">Latest</option>
                    <option value="">Latest</option>
                    <option value="">Latest</option>
                    <option value="">Latest</option>
                </select>
            </div>
        </div>

        <div class="contact_form_table">
            <table>
                <thead>
                    <tr>
                        <th>S no</th>
                        <th>Name</th>
                        <th>Business name</th>
                        <th>Phone number</th>
                        <th>Position</th>
                        <th>Email</th> 
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><p>1</p></td>
                        <td><p>Aqib Javid</p></td>
                        <td><p>ABC Company</p></td>
                        <td><p>+18062040582</p></td>
                        <td><p>Business Owner</p></td>
                        <td><p>aqib.official@gmail.com</p></td>
                        <td><button class="btn_1">View</button></td> 
                    </tr>  
                    <tr>
                        <td><p>2</p></td>
                        <td><p>Aqib Javid</p></td>
                        <td><p>ABC Company</p></td>
                        <td><p>+18062040582</p></td>
                        <td><p>Business Owner</p></td>
                        <td><p>aqib.official@gmail.com</p></td>
                        <td><button class="btn_1">View</button></td> 
                    </tr>  
                    <tr>
                        <td><p>3</p></td>
                        <td><p>Aqib Javid</p></td>
                        <td><p>ABC Company</p></td>
                        <td><p>+18062040582</p></td>
                        <td><p>Business Owner</p></td>
                        <td><p>aqib.official@gmail.com</p></td>
                        <td><button class="btn_1">View</button></td> 
                    </tr>  
                    <tr>
                        <td><p>4</p></td>
                        <td><p>Aqib Javid</p></td>
                        <td><p>ABC Company</p></td>
                        <td><p>+18062040582</p></td>
                        <td><p>Business Owner</p></td>
                        <td><p>aqib.official@gmail.com</p></td>
                        <td><button class="btn_1">View</button></td> 
                    </tr>  
                    <tr>
                        <td><p>5</p></td>
                        <td><p>Aqib Javid</p></td>
                        <td><p>ABC Company</p></td>
                        <td><p>+18062040582</p></td>
                        <td><p>Business Owner</p></td>
                        <td><p>aqib.official@gmail.com</p></td>
                        <td><button class="btn_1">View</button></td> 
                    </tr>  
                    <tr>
                        <td><p>6</p></td>
                        <td><p>Aqib Javid</p></td>
                        <td><p>ABC Company</p></td>
                        <td><p>+18062040582</p></td>
                        <td><p>Business Owner</p></td>
                        <td><p>aqib.official@gmail.com</p></td>
                        <td><button class="btn_1">View</button></td> 
                    </tr>  
                </tbody>
            </table>
        </div>
    </div>
 
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog sk_contact_modal modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Aqib Javid</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
             <div class="content_info">
                <a href="mailto:aqib.javid@gmail.com">aqib.javid@gmail.com</a>
                <a href="tel:+18062040582">+18062040582</a>
                <p>Hey,  admin i need help with registration here, as i face some issues while i doing in. please look into this and let me know how you can help in this. <button>See more</button></p>
                <h4>07 July, 2024</h4>
             </div>
        </div> 
      </div>
    </div>
  </div>
  

  
  
@endsection

@section('script')
 

    <script>   

        function test_post_callback(data){
            if (data.status == true) {
                notify('success', data.message, 'Success');
                $('#test_post_form')[0].reset();
                setTimeout(function() {
                    window.location.reload(); 
                }, 1000 * 2);
            } else {
                notify('error', data.message, 'Error');
                $.validator("test_post_form", data.errors);
            }
        }
 
    </script>


@endsection
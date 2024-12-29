@extends('admin.layouts.app')
@section('title', 'Reseller')
@section('custom-css') 
 

@endsection

@section('content')

    <div class="blog_listttt_content">
        <div class="content_header">
            <h3>Manage Reseller</h3>
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
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Company</th>
                        <th>Country</th>
                        <th>Want To</th> 
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><p>1</p></td>
                        <td><p>Aqib Javid</p></td>
                        <td><p>aqib.official@gmail.com</p></td>
                        <td><p>+18062040582</p></td>
                        <td><p>ABC Company</p></td>
                        <td><p>United State</p></td>
                        <td><p>Resell Scantranx Solutions</p></td>
                        <td><button class="btn_1">View</button></td> 
                    </tr>
                    <tr>
                        <td><p>2</p></td>
                        <td><p>Aqib Javid</p></td>
                        <td><p>aqib.official@gmail.com</p></td>
                        <td><p>+18062040582</p></td>
                        <td><p>ABC Company</p></td>
                        <td><p>Canada</p></td>
                        <td><p>Refer Customer to Scantranx</p></td>
                        <td><button class="btn_1">View</button></td> 
                    </tr>
                    <tr>
                        <td><p>3</p></td>
                        <td><p>Aqib Javid</p></td>
                        <td><p>aqib.official@gmail.com</p></td>
                        <td><p>+18062040582</p></td>
                        <td><p>ABC Company</p></td>
                        <td><p>United State</p></td>
                        <td><p>Resell Scantranx Solutions</p></td>
                        <td><button class="btn_1">View</button></td> 
                    </tr>
                    <tr>
                        <td><p>4</p></td>
                        <td><p>Aqib Javid</p></td>
                        <td><p>aqib.official@gmail.com</p></td>
                        <td><p>+18062040582</p></td>
                        <td><p>ABC Company</p></td>
                        <td><p>Canada</p></td>
                        <td><p>Refer Customer to Scantranx</p></td>
                        <td><button class="btn_1">View</button></td> 
                    </tr>
                    <tr>
                        <td><p>5</p></td>
                        <td><p>Aqib Javid</p></td>
                        <td><p>aqib.official@gmail.com</p></td>
                        <td><p>+18062040582</p></td>
                        <td><p>ABC Company</p></td>
                        <td><p>United State</p></td>
                        <td><p>Resell Scantranx Solutions</p></td>
                        <td><button class="btn_1">View</button></td> 
                    </tr>
                    <tr>
                        <td><p>6</p></td>
                        <td><p>Aqib Javid</p></td>
                        <td><p>aqib.official@gmail.com</p></td>
                        <td><p>+18062040582</p></td>
                        <td><p>ABC Company</p></td>
                        <td><p>Canada</p></td>
                        <td><p>Refer Customer to Scantranx</p></td>
                        <td><button class="btn_1">View</button></td> 
                    </tr>
                     
                </tbody>
            </table>
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
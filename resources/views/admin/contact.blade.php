@extends('admin.layouts.app')
@section('title', 'Contact Form')
@section('custom-css') 
 

@endsection

@section('content')

    <div class="blog_listttt_content">
        <div class="content_header">
            <h3>Manage Contact Inquries</h3>
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
                        <th>Date</th>
                        <th>Message</th>
                        <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                    {{-- <tr>
                        <td><p>1</p></td>
                        <td><p>Aqib Javid</p></td>
                        <td><p>aqib.official@gmail.com</p></td>
                        <td><p>+18062040582</p></td>
                        <td><p>07 July, 2024</p></td>
                        <td><p>Hey,  admin i need help with registration here, as i ...</p></td>
                        <td><button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn_1">View</button></td> 
                    </tr>  --}}
                    @foreach($contacts as $index => $contact)
                    <tr>
                        <td><p>{{ $index + 1 }}</p></td>
                        <td><p>{{ $contact->account_name }}</p></td>
                        <td><p>{{ $contact->email }}</p></td>
                        <td><p>{{ $contact->phone_number }}</p></td>
                        <td><p>{{ $contact->created_at->format('d M, Y') }}</p></td>
                        <td><p>{{ Str::limit($contact->message, 50) }}...</p></td>
                        <td><button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn_1">View</button></td> 
                    </tr> 
                    @endforeach
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
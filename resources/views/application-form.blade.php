@extends('frontend.layouts.app')

@section('content')

<div class="bigwinform">
    <h3><u>Big Win Application Form</u></h3>
    <h6>* indicates fields are required</h6>
<div class="container">

     @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <!--  Display Error Message -->
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 

    
    <form method="POST" action="{{ route('submitForm') }}" enctype="multipart/form-data">
        @csrf

        <label for="name">Name of Applicant (Full Name):<span>*</span></label>
        <input type="text" id="name" class="form-control"  name="name" required>

        <label for="dob">Date of Birth:<span>*</span></label>
        <input type="date" id="dob" class="form-control" name="dob" required>
        

        <label for="address">Address:<span>*</span></label>
        <textarea id="address" name="address" class="form-control" required></textarea>

        <label for="mobile1">Mobile 1:<span>*</span></label>
        <input type="text" id="mobile1" class="form-control" name="mobile1" required>

        <label for="mobile2">Mobile 2:<span>*</span></label>
        <input type="text" id="mobile2" class="form-control" name="mobile2" required>

        <label for="email">Email ID:<span>*</span></label>
        <input type="email" id="email"  class="form-control"name="email" required>

        <label for="passport_photo">Upload Passport Photo:<span>*</span></label>
        <input type="file" id="passport_photo" class="form-control" name="passport_photo" required>

        <label for="valid_document">Valid Document:<span>*</span></label>
        <div class="checkboxflex">
            <input type="radio" class="checklist"  id="aadhar_card" name="valid_document" value="aadhar_card" required> Aadhar Card
            <input type="radio" class="checklist"   id="voter_id" name="valid_document" value="voter_id" required> Voter ID
            <input type="radio" class="checklist"   id="other" name="valid_document" value="other" required> Any Other
        </div>

        <label for="upload_document">Upload Valid Document with signature:<span>*</span></label>
        <input type="file" class="form-control" id="upload_document" name="upload_document" required>

        <label for="document_id">Document ID Number:<span>*</span></label>
        <input type="number" class="form-control" id="document_id" name="document_id" required >

        <label for="nominee_name">Name of Nominee:<span>*</span></label>
        <input type="text" class="form-control" id="nominee_name" name="nominee_name" required >

        <label for="relationship">Relationship with Nominee:<span>*</span></label>
        <input type="text" class="form-control" id="relationship" name="relationship" required>

        <label for="nominee_address">Nominee Address:<span>*</span></label>
        <textarea id="nominee_address" class="form-control" name="nominee_address" required></textarea>

        <label for="nominee_mobile1">Nominee Mobile 1:<span>*</span></label>
        <input type="text" class="form-control" id="nominee_mobile1" name="nominee_mobile1" required>

        <label for="nominee_mobile2">Nominee Mobile 2:</label>
        <input type="text" class="form-control" id="nominee_mobile2" name="nominee_mobile2" >

        <label for="declaration">Declaration:<span>*</span></label>
        <div class="declarationcss">
        <input type="checkbox"  id="declaration" class="declcheckbox" name="declaration" required><p>I  Here by declare that the details mentioned in the form and the valid document submitted are correct to the best of my knowledge and belief. I bear the responsibility of any error or mistake in the data if occur in the future.</p>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
</div>

@endsection







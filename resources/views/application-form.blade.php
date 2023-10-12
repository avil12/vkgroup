@extends('frontend.layouts.app')

@section('content')

<div class="bigwinform">
    <h3>Big Win Application Form</h3>
<div class="container">

    <form method="post" action="{{ route('submitForm') }}" enctype="multipart/form-data">
        @csrf

        <label for="name">Name of Applicant (Full Name):<span>*</span></label>
        <input type="text" id="name" class="form-control" name="name" required>

        <label for="dob">Date of Birth:</label><span>*</span>
        <input type="date" id="dob" class="form-control" name="dob" required>

        <label for="address">Address:</label><span>*</span>
        <textarea id="address" name="address" class="form-control" required></textarea>

        <label for="mobile1">Mobile 1:</label><span>*</span>
        <input type="text" id="mobile1" class="form-control" name="mobile1" required>

        <label for="mobile2">Mobile 2:</label><span>*</span>
        <input type="text" id="mobile2" class="form-control" name="mobile2" required>

        <label for="email">Email ID:</label><span>*</span>
        <input type="email" id="email"  class="form-control"name="email" required>

        <label for="passport_photo">Upload Passport Photo:</label><span>*</span>
        <input type="file" id="passport_photo" class="form-control" name="passport_photo" required>

        <label for="valid_document">Valid Document:</label><span>*</span>
        <div class="checkboxflex">
        <input type="checkbox" class="checklist"  id="aadhar_card" name="valid_document[]" value="aadhar_card"> Aadhar Card
        <input type="checkbox" class="checklist"   id="voter_id" name="valid_document[]" value="voter_id"> Voter ID
        <input type="checkbox" class="checklist"   id="other" name="valid_document[]" value="other"> Any Other
        </div>

        <label for="upload_document">Upload Valid Document:</label><span>*</span>
        <input type="file" class="form-control" id="upload_document" name="upload_document" required>

        <label for="document_id">Document ID Number:</label><span>*</span>
        <input type="text" class="form-control" id="document_id" name="document_id" required>

        <label for="nominee_name">Name of Nominee:</label><span>*</span>
        <input type="text" class="form-control" id="nominee_name" name="nominee_name" required>

        <label for="relationship">Relationship with Nominee:</label><span>*</span>
        <input type="text" class="form-control" id="relationship" name="relationship" required>

        <label for="nominee_address">Nominee Address:</label><span>*</span>
        <textarea id="nominee_address" class="form-control" name="nominee_address" required></textarea>

        <label for="nominee_mobile1">Nominee Mobile 1:</label><span>*</span>
        <input type="text" class="form-control" id="nominee_mobile1" name="nominee_mobile1" required>

        <label for="nominee_mobile2">Nominee Mobile 2:</label>
        <input type="text" class="form-control" id="nominee_mobile2" name="nominee_mobile2" required>

        <label for="declaration">Declaration:</label>
        <input type="checkbox"  id="declaration" name="declaration" required>

        <button type="submit">Submit</button>
    </form>
</div>
</div>






@endsection
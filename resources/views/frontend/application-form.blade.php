@extends('frontend.layouts.app')

@section('content')

<div class="bigwinform">
<div class="container">
    <form method="post" action="{{ route('submitForm') }}" enctype="multipart/form-data">
        @csrf

        <label for="name">Name of Applicant:</label>
        <input type="text" id="name" name="name" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>

        <label for="mobile1">Mobile 1:</label>
        <input type="text" id="mobile1" name="mobile1" required>

        <label for="mobile2">Mobile 2:</label>
        <input type="text" id="mobile2" name="mobile2" required>

        <label for="email">Email ID:</label>
        <input type="email" id="email" name="email" required>

        <label for="passport_photo">Upload Passport Photo:</label>
        <input type="file" id="passport_photo" name="passport_photo" required>

        <label for="valid_document">Valid Document:</label><br>
        <input type="checkbox" id="aadhar_card" name="valid_document[]" value="aadhar_card"> Aadhar Card<br>
        <input type="checkbox" id="voter_id" name="valid_document[]" value="voter_id"> Voter ID<br>
        <input type="checkbox" id="other" name="valid_document[]" value="other"> Any Other<br>

        <label for="upload_document">Upload Valid Document:</label>
        <input type="file" id="upload_document" name="upload_document" required>

        <label for="document_id">Document ID Number:</label>
        <input type="text" id="document_id" name="document_id" required>

        <label for="nominee_name">Name of Nominee:</label>
        <input type="text" id="nominee_name" name="nominee_name" required>

        <label for="relationship">Relationship with Nominee:</label>
        <input type="text" id="relationship" name="relationship" required>

        <label for="nominee_address">Nominee Address:</label>
        <textarea id="nominee_address" name="nominee_address" required></textarea>

        <label for="nominee_mobile1">Nominee Mobile 1:</label>
        <input type="text" id="nominee_mobile1" name="nominee_mobile1" required>

        <label for="nominee_mobile2">Nominee Mobile 2:</label>
        <input type="text" id="nominee_mobile2" name="nominee_mobile2" required>

        <label for="declaration">Declaration:</label>
        <input type="checkbox" id="declaration" name="declaration" required>

        <button type="submit">Submit</button>
    </form>
</div>
</div>






@endsection
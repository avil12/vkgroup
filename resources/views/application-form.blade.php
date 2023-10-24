@extends('frontend.layouts.app')

@section('content')

<div class="bigwinform">
    <!-- <h3><u>Big Win Application Form</u></h3>
    <h6>* indicates fields are </h6> -->
    
   
<div class="container">
    <div class="row">
        
    
    <div class="col-lg-6">
        

<div class="headimg">
         <img src="{{ static_asset('assets/img/headerform.jpg') }}">
    </div>

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

        <label for="name">Name of Applicant (Full Name):</label>
        <input type="text" id="name" class="form-control"  name="name" >

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" class="form-control" name="dob" >
        

        <label for="address">Address:</label>
        <textarea id="address" name="address" class="form-control" ></textarea>

        <label for="mobile1">Mobile 1:</label>
        <input type="text" id="mobile1" class="form-control" name="mobile1" >

        <label for="mobile2">Mobile 2:</label>
        <input type="text" id="mobile2" class="form-control" name="mobile2" >

        <label for="email">Email ID:</label>
        <input type="email" id="email"  class="form-control"name="email" >

        <label for="passport_photo">Upload Passport Photo:</label>
        <input type="file" id="passport_photo" class="form-control" name="passport_photo" >

        <label for="valid_document">Valid Document:</label>
        <div class="checkboxflex">
            <input type="radio" class="checklist"  id="aadhar_card" name="valid_document" value="aadhar_card" > Aadhar Card
            <input type="radio" class="checklist"   id="voter_id" name="valid_document" value="voter_id" > Voter ID
            <input type="radio" class="checklist"   id="other" name="valid_document" value="other" > Any Other
        </div>

        <label for="upload_document">Upload Valid Document with signature:</label>
        <input type="file" class="form-control" id="upload_document" name="upload_document" >

        <label for="document_id">Document ID Number:</label>
        <input type="number" class="form-control" id="document_id" name="document_id"  >

        <label for="nominee_name">Name of Nominee:</label>
        <input type="text" class="form-control" id="nominee_name" name="nominee_name"  >

        <label for="relationship">Relationship with Nominee:</label>
        <input type="text" class="form-control" id="relationship" name="relationship" >

        <label for="nominee_address">Nominee Address:</label>
        <textarea id="nominee_address" class="form-control" name="nominee_address" ></textarea>

        <label for="nominee_mobile1">Nominee Mobile 1:</label>
        <input type="text" class="form-control" id="nominee_mobile1" name="nominee_mobile1" >

        <label for="nominee_mobile2">Nominee Mobile 2:</label>
        <input type="text" class="form-control" id="nominee_mobile2" name="nominee_mobile2" >

        <label for="declaration">Declaration:</label>
        <div class="declarationcss">
        <input type="checkbox"  id="declaration" class="declcheckbox" name="declaration" ><p>I  Here by declare that the details mentioned in the form and the valid document submitted are correct to the best of my knowledge and belief. I bear the responsibility of any error or mistake in the data if occur in the future.</p>
        </div>
        <div class="borderline"></div>
        <!-- <h6>FOR OFFICE USE:</h6> -->
        <label for="name">Executive Name:</label>
        <input type="text" id="exename" class="form-control"  name="exename" readonly>
        <label for="mobile1">Executive Mobile NO:</label>
        <input type="text" id="exemobileno" value="+917996199666 / 7996399666" class="form-control" name="exemobileno"  readonly>
        

        <button type="submit">Submit</button>

    </form>

    <div class="bankdetails dsk">
             <img src="{{ static_asset('assets/img/bankdetails.jpg') }}">
        </div>

     <div class="bankdetails mob">
             <img src="{{ static_asset('assets/img/bankmobile1.jpg') }}"><br>
             <img src="{{ static_asset('assets/img/bankmobile2.jpg') }}">
    </div>

</div>

    
     <div class="col-lg-6">
        
        <div class="rulestext">
            <h2>Rules & Regulations</h2>
        </div>
        <div class="rulespara">
            <p>1. First installment starts on 12th December, 2023.</p>
            <p>2. Every member should pay a monthly installment amount of Rs. 1,500 for 24 months.</p>
            <p>3. Members can transfer monthly installment amount either to Bank Account mentioned in the membership card or through UPI / QR Code Scanner or any other online payment methods. Membership card Number must be sent along with transaction ID, while transferring monthly installment amount. No cash payment is accepted.</p>
            <p>4. Members must submit valid ID proofs such as Aadhar card, Voter ID.</p>
            <p>5. Members must get the confirmation of monthly amount deposited to the organizers bank account</p>
            <p>6. Monthly installment amount must be paid before 07th of every month. Draw will be conducted on 12th date of every month at 4.00pm in the presence of members and result will be announced through SMS or WhatsApp to every member individually and live streamed on YouTube Channel.</p>
            <p>7. Members who do not pay monthly installment are not eligible for Lucky draw. And also no cash will be refunded in case the member stops the monthly payment or withdraws the membership from the Big win unexpectedly or in the middle of installment term.</p>
            <p>8. Members who do not win any of the monthly draws are eligible for total Rs. 36,000 worth any items from any of VK Furniture and Electronics showroom, which will be given within 30 days from the final draw.</p>
            <p>9. Cash will not be given in lieu of prizes.</p>
            <p>10. Monthly lucky winners need not pay next installment and will be out from the next lucky draw.</p>
            <p>11. Disputes if any, will be limited to Mangalore jurisdiction</p>
            <p>12. All Government charges related to the prizes have to be borne by the winners themselves.</p>
            <p>13. Land with 3bhk Villa will be provided under Mangalore city limits.</p>
            <p>14. Organizers decision will be the final decision.</p>
        </div>


    </div>
</div>  

   </div>
 
</div>

@endsection







public $data;
public $passportPhotoPath;
public $validDocumentPath;

public function __construct($data, $passportPhotoPath, $validDocumentPath)
{
    $this->data = $data;
    $this->passportPhotoPath = $passportPhotoPath;
    $this->validDocumentPath = $validDocumentPath;
}

<p>Application Name: - {{ $data['name'] }}</p>
<p>Date of Birth: - {{ $data['dob'] }}</p>
<p>Address: - {{ $data['address'] }}</p>
<p>Mobile 1: - {{ $data['mobile1'] }}</p>
<p>Mobile 2: - {{ $data['mobile2'] }}</p>
<p>Email ID: - {{ $data['email'] }}</p>
<p>Passport : - $passportPhotoPath;</p>
<p>Valid Dicument - $validDocumentPath;</p>
<p>Valid Document: - {{ ucfirst(str_replace('_', ' ', $data['valid_document'])) }}</p>
<p>Document ID Number: - {{ $data['document_id'] }}</p>
<p>Name of Nominee: - {{ $data['nominee_name'] }}</p>
<p>Relationship with Nominee: - {{ $data['relationship'] }}</p>
<p>Nominee Address: - {{ $data['nominee_address'] }}</p>
<p>Nominee Mobile 1: - {{ $data['nominee_mobile1'] }}</p>
<p>Nominee Mobile 2: - {{ $data['nominee_mobile2'] }}</p>
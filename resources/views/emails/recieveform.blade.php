<p>Application Name: - {{ $validatedData['name']}}</p>
<p>Date of Birth: -{{ $validatedData['dob']}}</p>
<p>Address:-{{ $validatedData['address']}}</p>
<p>Mobile 1:-{{ $validatedData['mobile1'] }}</p>
<p>Mobile 2:-{{ $validatedData['mobile2'] }}</p>
<p>Email ID:-{{ $validatedData['email']}}</p>
<p>Valid Document:-{{ ucfirst(str_replace('_', ' ', $validatedData['valid_document'])) }}</p>
<p>Document ID Number:-{{ $validatedData['document_id'] }}</p>
<p>Name of Nominee:-{{ $validatedData['nominee_name'] }}</p>
<p>Relationship with Nominee:-{{ $validatedData['relationship'] }}</p>
<p>Nominee Address:-{{ $validatedData['nominee_address'] }}</p>
<p>Nominee Mobile 1:-{{ $validatedData['nominee_mobile1'] }}</p>
<p>Nominee Mobile 2:-{{ $validatedData['nominee_mobile2'] }}</p>
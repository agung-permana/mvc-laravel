<!DOCTYPE html>
<html>
<head>
    <title>Form Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>

        
        <form action="{{ url('welcome') }}">
            <div>	
                <label for="first_name">First Name:</label><p>
                <input type="text" id="first_name">
            </div>
            <div>
                <label for="last_name">Last Name:</label><p>
                <input type="text" id="last_name">
            </div>
        

            <div>
                <p>Gender:</p>
                <input type="radio" name="gender" value="0" checked=""><label> Male</label> <p>
                <input type="radio" name="gender" value="1"><label> Female</label> <p>
                <input type="radio" name="gender" value="2"><label> Other</label>
            </div>
            
            <div>
                <p>Nationality:</p>
                <select>
                    <option value="id">Indonesia</option>
                    <option value="my">Malaysia</option>
                    <option value="th">Thailand</option>
                    <option value="sg">Singapura</option>
                </select>
            </div>

            <div>
                <p>Language Spoken</p>
                <input type="checkbox" name="bahasa" value="id"> Indonesia <p>
                <input type="checkbox" name="bahasa" value="eng"> English <p>
                <input type="checkbox" name="bahasa" value="oth"> Other
            </div>

            <div>
                <p>Bio:</p>
                <textarea cols="30" rows="10"></textarea>
            </div><br>

            <button type="submit" value="Sign Up">Sign Up</button>
        </form>

    </div>
	

</body>
</html>
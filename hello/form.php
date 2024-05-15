
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Register Now</title>
            <style>
                .container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                }

                .form-container {
                    width: 400px;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
                }
                .btn {
                background-color: #4CAF50; 
                border: none; 
                color: white; 
                padding: 15px 32px; 
                text-align: center; 
                text-decoration: none; 
                display: inline-block;
                font-size: 16px; 
                margin: 4px 2px;
                cursor: pointer; 
                border-radius: 12px;
                transition-duration: 0.4s; 
            }

            .btn:hover {
                background-color: white;
                color: black; 
                border: 2px solid #4CAF50; 
            }

            .text-center {
                text-align: center; 
                margin-top: 20px; 
            }
            </style>
        </head>
        <body>

        <div class="container">
            <div class="form-container">
                <form action="index.php" method="POST" class="bg-light rounded p-3"> 
                
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required> 
                    </div>
    
                    <div class="mb-3">
                        <label for="address" class="form-label">Address:</label> 
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Gender:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    
                    </div>

                    <div class="mb-3">
                        <label for="birthday" class="form-label">Birthday:</label> 
                        <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>

                    <div class="mb-3">
                        <label for="place_of_birth" class="form-label">Place of Birth:</label>
                        <input type="text" class="form-control" id="place_of_birth" name="place_of_birth">
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Civil Status:</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">--Select--</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Separated</option>
                            <option value="widowed">Widowed</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="cellphone_number" class="form-label">Cellphone Number:</label>
                        <input type="tel" class="form-control" id="cellphone_number" name="cellphone_number">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="citizenship" class="form-label">Citizenship:</label>
                        <input type="text" class="form-control" id="citizenship" name="citizenship">
                    </div>

                    <div class="text-center">
                        <input type="submit" value="submit" name="send" class="btn">
                    </div>

                </form>
            </div>
        </div>

        </body>
        </html>

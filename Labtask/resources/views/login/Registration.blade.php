<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
</head>

<body>
    <form method="post">
        @csrf

        <table>
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="fname" placeholder="Enter your Full Name">
                    <div>{{ $errors->First('fname') }}</div>
                </td>

            </tr>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="uname" placeholder="Enter your username">
                    <div>{{ $errors->First('uname') }}</div>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Enter your Email">
                    <div>{{ $errors->First('email') }}</div>
                </td>
            </tr>
            <tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Enter your Password">
                    <div>{{ $errors->First('password') }}</div>
                </td>
            </tr>

            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="cpassword" placeholder="Enter your Confirm Password">
                    <div>{{ $errors->First('cpassword') }}</div>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" placeholder="Enter your Address">
                    <div>{{ $errors->First('address') }}</div>
                </td>
            </tr>
            <tr>
                <td>Company Name</td>
                <td><input type="text" name="cname" placeholder="Enter your Company name">
                    <div>{{ $errors->First('cname') }}</div>
                </td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="number" name="pnumber" placeholder="Enter your Phone number">
                    <div>{{ $errors->First('pnumber') }}</div>
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="city" placeholder="Enter your city">
                    <div>{{ $errors->First('city') }}</div>
                </td>
            </tr>
            <tr>
                <td>Country</td>
                <td><input type="text" name="country" placeholder="Enter your country">
                    <div>{{ $errors->First('country') }}</div>
                </td>
            </tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Sign up"></td>
            </tr>
        </table>
    </form>

</body>

</html>

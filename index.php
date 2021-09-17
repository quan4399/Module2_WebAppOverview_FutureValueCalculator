<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application Future Value Calculator</title>
</head>
<body>
<form action="display_result.php"method="POST" >

    <fieldset style="width: 350px; border-radius: 10px; margin: auto" >
        <h4>Enter information</h4>
        <legend style="font-weight: bold"><h3>Application Future Value Calculator</h3></legend>
        <table>
            <tr>
                <td>
                    <label for="investAmount">Investment Amount</label>
                </td>
                <td>
                    <input type="number" name="investAmount" id="investAmount" value="" placeholder="Nhập số tiền ban đầu">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="rate">Yearly Interest Rate</label>
                </td>
                <td>
                    <input type="number" name="rate" id="rate" value="" placeholder="Nhập lãi suất năm">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="year">Number of Years</label>
                </td>
                <td>
                    <input type="number" name="year" id="year" value="" placeholder="Nhập số năm gửi ">
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="submit" value="Calculate"/>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>


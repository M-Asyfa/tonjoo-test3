<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Sum Input</title>
</head>
<body>
    <h1>Enter Fibonacci Indices</h1>
    <form action="" method="get" onsubmit="event.preventDefault(); window.location.href='/fibonacci/' + n1.value + '/' + n2.value;">
        <label>n1:</label>
        <input type="number" name="n1" id="n1" required><br><br>
        <label>n2:</label>
        <input type="number" name="n2" id="n2" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

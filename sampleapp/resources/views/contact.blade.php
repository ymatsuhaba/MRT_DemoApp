<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-with, initial-scale-1.0">
    <meta http-equiv="X-UA=Compatible" content="ie=edge">
    <title>フォーム</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <form>
        <div class="form-group">
            <label>Full Name: </label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
                <label>Email Address: </label>
                <input type="text" class="form-control" name="email">
            </div>

        <div class="form-group">
                <label>Message: </label>
                <textarea name="Message" class="form-control"></textarea>
            </div>

            <button class="btn btn-primary">Submit</button>
    </form> 
</div>
</body>
</html>
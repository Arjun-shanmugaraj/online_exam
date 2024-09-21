<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<style>
    .inner {
        padding:50px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .page-header {
        margin-top: 0;
        padding-bottom: 10px;
        border-bottom: 1px solid #ddd;
    }

    .panel {
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .panel-heading {
        padding: 10px 15px;
        border-bottom: 1px solid #ddd;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .panel-title {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 16px;
        color: inherit;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .control-label {
        display: inline-block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }

    .form-control:focus {
        border-color: #66afe9;
        outline: 0;
        box-shadow: 0 0 10px rgba(102, 175, 233, 0.6);
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 10px;
    }

    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
        margin: 20px;
    }
  .custom-label {
    font-weight: bold;
    color: #337ab7; /* blue color */
    cursor: pointer; /* pointer cursor */
    padding: 5px; /* add some padding */
    border-radius: 5px; /* add some rounded corners */
    background-color: #f7f7f7; /* light gray background */
  }
  .custom-paragraph {
    font-size: 18px; /* larger font size */
    font-family: Arial, sans-serif; /* change font family */
    color: #666; /* dark gray color */
    line-height: 1.5; /* increase line height */
    padding: 10px; /* add some padding */
    border-bottom: 1px solid #ccc; /* add a bottom border */
  }
  .custom-input {
    width: 40%; /* full width */
    height: 40px; /* increased height */
    padding: 10px; /* add some padding */
    font-size: 16px; /* larger font size */
    border: 1px solid #ccc; /* light gray border */
    border-radius: 5px; /* rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* subtle shadow */
    margin: 20px;
  }
  
  .custom-input:focus {
    border-color: #337ab7; /* blue border on focus */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* increased shadow on focus */
  }
  .custom-file-input {
    width: 40%; /* full width */
    height: 40px; /* increased height */
    padding: 10px; /* add some padding */
    font-size: 16px; /* larger font size */
    border: 1px solid #ccc; /* light gray border */
    border-radius: 5px; /* rounded corners */
    margin: 20px;
    background-color: #f7f7f7; /* light gray background */
  }
  
  .custom-file-input::-webkit-file-upload-button {
    background-color: #337ab7; /* blue background for the upload button */
    color: #fff; /* white text for the upload button */
    padding: 10px 20px; /* add some padding to the upload button */
    border: none; /* remove border from the upload button */
    border-radius: 5px; /* rounded corners for the upload button */
    cursor: pointer; /* pointer cursor for the upload button */
  }
  
  .custom-file-input::-webkit-file-upload-button:hover {
    background-color: #23527c; /* darker blue background on hover */
  }
</style>
<body>
<div class="inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Book</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Book Details</h3>
                </div>
                <div class="panel-body">
                    <form action="{{ route('editBooks', $book->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('GET')
                        <div class="form-group">
                            <label for="name" class="control-label custom-label">Name:</label>
                            <input type="text" class="custom-input" id="name" name="name" value="{{ $book->name }}">
                        </div>
                        <div class="form-group">
                            <label for="file" class="control-label custom-label">File Name:</label>
                            <p class="custom-paragraph">Current File: {{ $book->file_name }}</p>
                            <input type="file" class="custom-file-input" id="file" name="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
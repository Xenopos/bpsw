<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bicol Car Service Providers</title>
    <meta name="description" content="Figma htmlGenerator">
    <meta name="author" content="htmlGenerator">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/editcomment_style.css') }}">
    <style>
        /* Figma Background for illustrative/preview purposes only.
           You can remove this style tag with no consequence */
        body {
            background: #E5E5E5;
        }
    </style>
</head>

<body>
    <div class="comment_page_267_4">
        <div class="rectangle_30_267_5"></div>
        <div class="rectangle_28_267_6"></div>
        <span class="provider_name_281_4">{{ $user->user_type }}</span>
        <form action="{{ route('addcommentpost') }}" method="POST">
            @csrf
            <div class="group_23_281_5">
                <textarea class="rectangle_72_281_31" name="comment" placeholder="Comment"></textarea>
                <div class="rectangle_31_281_24"></div>
            </div>
            <button type="submit" class="rectangle_72_281_31">Submit</button>
        </form>
        <div class="rectangle_71_281_27"></div>
        <span class="username_281_29">Username</span>
        <span class="comment_281_28">Comment</span>
    </div>
</body>
</html>

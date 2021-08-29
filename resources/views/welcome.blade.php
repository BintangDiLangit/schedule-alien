<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Schedule Alien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<style>
    body {
        background-color: #eee
    }

    .card {
        border: none;
        border-radius: 10px
    }

    .c-details span {
        font-weight: 300;
        font-size: 13px
    }

    .icon {
        width: 50px;
        height: 50px;
        background-color: #eee;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 39px
    }

    .badge span {
        background-color: #fffbec;
        width: 60px;
        height: 25px;
        padding-bottom: 3px;
        border-radius: 5px;
        display: flex;
        color: #fed85d;
        justify-content: center;
        align-items: center
    }

    .progress {
        height: 10px;
        border-radius: 10px
    }

    .progress div {
        background-color: red
    }

    .text1 {
        font-size: 14px;
        font-weight: 600
    }

    .text2 {
        color: #a5aec0
    }

</style>

<body>


    <div class="container mt-5 mb-3">
        <h1 class="text-center mb-3">Schedule Alien | Semester 5</h1>
        <div class="row">
            @foreach ($sch as $sch)
                <div class="col-md-4">
                    <div class="card p-3 mb-2">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <div class="icon">{{ $sch->kelas }}</div>
                                <div class="ms-2 c-details">
                                    <h6 class="mb-0">{{ $sch->dosen }}</h6> <span>{{ $sch->jam }}</span>
                                </div>
                            </div>
                            <div class="badge"> <a class="text-decoration-none" href="{{ $sch->linkGroup }}"
                                    target="_blank"><span>Link</span></a>
                            </div>
                        </div>
                        <div class="mt-5">
                            <p class="heading">Matkul : {{ $sch->namaMatkul }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</body>

</html>

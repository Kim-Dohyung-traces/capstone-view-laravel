@extends('layouts.app')

@section('content')
<style>
    .app-main{
        /* background-color: aquamarine; */
    }
    .test1{
        padding: 15px;
    }
    .test2{
        background-image: url(https://static.inven.co.kr/image_2011/site_image/game/minidata/84/character_1501_c1.jpg);
        background-size: cover;
    }
    .test3{
        background-color: green;
    }
    .card{
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(26, 54, 126, 0.125);
        border-radius: 0.25rem;
        text-align: center;
        padding: 1rem;
    }
    
</style>

<section id="main-qna">
    <div class="app-main">
        <div class="row test1">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="card">
                    <div class="">
                       icon
                    </div>
                    <h1>자주하는 질문</h1>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="card">
                    <div class="">
                        icon
                    </div>
                    <h1>전체 질문</h1>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="card">
                    <div class="">
                        icon
                    </div>
                    <h1>공지사항</h1>
                </div>
            </div>
        </div>
        <div class="row test1">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-hover .table-responsive">
                    <thead class="">
                        <tr>
                            <td>No</td>
                            <td>Category</td>
                            <td>userId</td>
                            <td>Date</td>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr>
                            <td>No</td>
                            <td>Category</td>
                            <td>userId</td>
                            <td>Date</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</section>
<!-- intro section -->
@endsection
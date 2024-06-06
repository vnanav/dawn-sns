@extends('layouts.app')
@section('content')
                    <div class="left-top">
                        <div class="left-top-icon user-icon">
                            <img src="{{ asset('images/icons/dawn.png') }}" alt="">
                        </div>
                        <form action="" class="left-top-post" method="post">
                            <textarea name="" class="left-top-post-content" placeholder="何をつぶやこうか...?"></textarea>
                            <a class="left-top-btn">
                                <img src="{{ asset('images/icons/post.png') }}" alt="">
                            </a>
                        </form>
                    </div>
                    <!-- <div class="container"> -->
                    <div class="left-bottom">
                        <!-- <div class="left-bottom-post"> -->
                        <div class="left-bottom-left user-icon">
                            <img src="{{ asset('images/icons/dawn.png') }}" alt="">
                        </div>
                        <ul class="left-bottom-center">
                            <li class="left-bottom-center-item left-bottom-center-username">Dawntown</li>
                            <li class="left-bottom-center-item left-bottom-center-content">今日はカレーを食べました！<br><br>野菜もお肉も取れて<br><br><br>元気が出る！<br>今度は家で作ろうかな！？
                            </li>
                        </ul>
                        <ul class="left-bottom-right">
                            <li class="left-bottom-right-item left-bottom-right-date">2020-09-15 23:32</li>
                            <li class="left-bottom-right-item left-bottom-right-icon">
                                <div class="left-bottom-right-icon-update">
                                    <a href="">
                                        <img src=" {{ asset('images/icons/edit.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="left-bottom-right-icon-delete">
                                    <form action="" method="post" onclick="return confirm('こちらの投稿を削除してもよろしいでしょうか？')">
                                        <input type="hidden" name="id" value="">
                                        <button type="submit" class="btn">
                                            <img alt="">
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <!-- </div> -->
                    </div>
                    <!-- </div> -->
@endsection

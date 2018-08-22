@extends('layouts.flight')

@section('content')
<div class="content__block-center content__block-center_green slide-two">
    <div class="content__block-header">
        <span class="icon-closed-green"><span class="icon-sprite"></span></span>
        <span class="text">Создание перелета</span>
        <span class="icon-mooraways icon-mooraways-green" style="right: 61px; bottom: -2px"><span class="icon-sprite"></span></span>
        <div class="slider__dots">
            <span class="slider__dot"></span>
            <span class="slider__dot"></span>
            <span class="slider__dot slider__dot_active"></span>
        </div>
    </div>
    <div class="content__block-content">
        <div class="avatar ">
            <div class="avatar__cover avatar__cover_big-xs">
                <img class="pic" src="{{ $user->getAvatarUrl() }}" height="123" width="123">
            </div>
        </div>
        <?php if($user->type == 'user'):?>
        <p class="content__block-description content__block-description_st">Так будет выглядеть Ваше фото</p>
        <?php else:?>
        <p class="content__block-description content__block-description_st">
            <span>Внимание!</span> Стюартам (стюардессам),<br>
            необходимо загрузить фото в униформе.</p>
        <?php endif;?>
        <div class="content__block-btn">
            <a href="/carrier/cabinet" class="button">Далее</a>
        </div>

        <a href="/flight/step5/no-photo" class="link">У меня нет фото</a>
    </div>
</div>
@endsection
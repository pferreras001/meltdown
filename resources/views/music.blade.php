@extends('layout')

@section('section')


<section class="music">

  <div class="music__container">

    <div class="music__title title">
      <span>{{ __('music.music') }}</span>
      <span>{{ __('music.music_sub') }}</span>
    </div>


    <div class="music__grid">

      <div class="music__item">
        <img src="/img/music/tinf-s.jpg" alt=""/>
        <div class="music__info">
          <h2>This is now Forever</h2>
          <h3><span>Single</span><span>2020</span></h3>
        <div>
          <a href="https://open.spotify.com/album/6ajqUgt50N9bPpSGmUAZyT?highlight=spotify:track:5FlSO2pn1qFMtTnahxVB52" target="_blank"><?php require('imports/svg/spotify.svg') ?></a>
          <a href="https://www.youtube.com/watch?v=NTRN9koXPGg" target="_blank"><?php require('imports/svg/youtube.svg') ?></a>
        </div>
        </div>
      </div>



      <div class="music__item">
        <img src="/img/music/limits-s.jpg" alt=""/>
        <div class="music__info">
          <h2>Limits</h2>
          <h3><span>Single</span><span>2019</span></h3>
        <div>
          <a href="https://open.spotify.com/album/2ZVO3WK6ouSGHwEEZDUpyo?highlight=spotify:track:0LaYcNqSQtgOFowFSAeOv1" target="_blank"><?php require('imports/svg/spotify.svg') ?></a>
          <a href="https://www.youtube.com/watch?v=TMFZKtO9wm8" target="_blank"><?php require('imports/svg/youtube.svg') ?></a>
        </div>
        </div>
      </div>



      <div class="music__item">
        <img src="/img/music/ftdttg-s.jpg" alt=""/>
        <div class="music__info">
          <h2>From This Day to the Grave</h2>
          <h3><span>Album</span><span>2018</span></h3>
        <div>
          <a href="https://open.spotify.com/album/3f0xvtNAHbXhtCgVyEFEF8" target="_blank"><?php require('imports/svg/spotify.svg') ?></a>
          <a href="https://www.youtube.com/watch?v=mTP0VMNNMvA&list=PLV0gCQq2rXa8AJTOAGS-2HzU02WUyuZFZ" target="_blank"><?php require('imports/svg/youtube.svg') ?></a>
        </div>
        </div>
      </div>



      <div class="music__item">
        <img src="/img/music/irtdh-s.jpg" alt=""/>
        <div class="music__info">
          <h2>I Refuse to Die Here</h2>
          <h3><span>EP</span><span>2016</span></h3>
        <div>
          <a href="https://open.spotify.com/album/4moge0gt2abtyGT3lVxdQT" target="_blank"><?php require('imports/svg/spotify.svg') ?></a>
          <a href="https://www.youtube.com/watch?v=ariQfybYlo8&list=PLV0gCQq2rXa8ujZOJi2jTEJ9jph0-Fa1z" target="_blank"><?php require('imports/svg/youtube.svg') ?></a>
        </div>
        </div>
      </div>



      <div class="music__item">
        <img src="/img/music/oxymoron-s.jpg" alt=""/>
        <div class="music__info">
          <h2>Oxymoron</h2>
          <h3><span>Single</span><span>2015</span></h3>
        <div>
          <a href="https://www.youtube.com/watch?v=iEIiZ6761b8" target="_blank"><?php require('imports/svg/youtube.svg') ?></a>
        </div>
        </div>
      </div>

    </div>

  </div>

</section>


@endsection
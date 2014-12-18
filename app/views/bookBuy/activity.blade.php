@extends('layouts.nav')
@section('head')
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>购书活动</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bookBuy/public.css"/>
	<link rel="stylesheet" type="text/css" href="frame/uikit/css/uikit.min.css"/>
	<script type="text/javascript" src="js/jquery2.1.0.js"></script>
  <script type="text/javascript" src="js/bookBuy/public.js"></script>
	<script type="text/javascript" src="js/bookBuy/activity.js"></script>
	<script type="text/javascript" src="frame/uikit/js/uikit.min.js"></script> 

</head>

<body id="container">
@stop
  
@section('body')
  @if(count($activity)==0)
    <form class="uk-form" id="update" action="/activity/update" method="post">
      <fieldset>
        <legend>购书活动</legend>
        <div class="uk-form-row">
          <label class="uk-form-label" for="deadline">Deadline</label>
          <input type="text" id="deadline" name="deadline" data-uk-datepicker="{format:'YYYY.MM.DD'}">
        </div>

        <div class="uk-form-row">
          <label class="uk-form-label" for="budget">Budget</label>
          <input type="text" id="budget" name="budget">
        </div>

        <div class="uk-form-row">
          <label class="uk-form-label" for="message">Message</label>
          <input type="text" id="message" name="message">
        </div>

        <div class="uk-form-row">
          <input class="uk-button uk-button-primary" type="submit" value="Open">
        </div>
      </fieldset>
    </form>
  @else
    <div class="uk-grid">
      <div class="uk-width-4-5">
        <p class="uk-text-large">Deadline: {{$activity[0]->act_period}}</p>
        <p class="uk-text-large">Budget: {{$activity[0]->act_budget}}</p>
        <p class="uk-text-large">Message: {{$activity[0]->act_message}}</p>
        <form class="uk-form" id="finish" action="/activity/finish" method="post">
          <div class="uk-form-row">
            <label class="uk-form-label uk-text-large" for="cost">Cost:</label>
            <input type="text" id="cost" name="cost"/>
          </div>
          <div class="uk-form-row">
            <button class="uk-button uk-button-primary">Finish</button>
          </div>
        </form>
      </div>
      <div class="uk-width-1-5">
        <button class="uk-button" data-uk-modal="{target:'#editBoard'}">Edit</button>
      </div>
    </div>

    <a href="#editBoard" data-uk-modal></a>
    <div class="uk-modal" id="editBoard">
      <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <form class="uk-form" id="update" action="/activity/update" method="post">
        <fieldset>
          <legend>购书活动</legend>
          <div class="uk-form-row">
            <label class="uk-form-label" for="deadline">Deadline</label>
            <input type="text" id="deadline" name="deadline" value="{{$activity[0]->act_period}}" data-uk-datepicker="{format:'YYYY.MM.DD'}">
          </div>

          <div class="uk-form-row">
            <label class="uk-form-label" for="budget">Budget</label>
            <input type="text" id="budget" name="budget" value="{{$activity[0]->act_budget}}">
          </div>

          <div class="uk-form-row">
            <label class="uk-form-label" for="message">Message</label>
            <input type="text" id="message" name="message" value="{{$activity[0]->act_message}}">
          </div>

          <div class="uk-form-row">
            <input class="uk-button uk-button-primary" type="submit" value="Update">
          </div>
        </fieldset>
        </form>
      </div>
    </div>
  @endif
@stop
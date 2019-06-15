@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Chats App
                  </div>
                <div class="card-body">
                  <ul>
                      <li v-for="message in messages">
                          @{{message.user.name}} - @{{message.message}}
                      </li>
                  </ul>
                  <div>
                      <div class="input-group">
                            <input type="text" name="message" class="form-control" placeholder="Type your message here..." v-model="newMessage" @keydown="isTyping" @keyup.enter="sendMessage">
                          <div class="input-group-append">
                                <button class="btn btn-primary" @click="sendMessage">
                                    Send
                                </button>
                          </div>
                      </div>
                      <span v-show="typing" class="help-block" style="font-style:italic;">
                        @{{user.name}} is typing...
                      </span>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
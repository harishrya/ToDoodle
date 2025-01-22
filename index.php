<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-Doodle</title>
  <link rel="icon" href="assets/icon.png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  

  <style>
    @keyframes rubberband {
      0% {
        transform: scale(1);
      }
      30% {
        transform: scaleX(1.50) scaleY(1.25);
      }
      40% {
        transform: scaleX(0.75) scaleY(1.25);
      }
      50% {
        transform: scaleX(1.15) scaleY(0.85);
      }
      65% {
        transform: scaleX(0.95) scaleY(1.05);
      }
      75% {
        transform: scaleX(1.05) scaleY(0.95);
      }
      100% {
        transform: scale(1);
      }
    }

    .rubberband {
      animation: rubberband 1s ease-in-out;
    }
  
    @keyframes backOutRightDown {
      0% {
        opacity: 1;
        transform: translate(0);
      }
      100% {
        opacity: 0;
        transform: translate(100%, 100%) scale(0.7);
      }
    }

    .delete-anim {
      animation: backOutRightDown 0.9s ease-out;
    }

  </style>

</head>
<body>
  <section>
    <div class="bg">
      <div class="container" style="padding-top: 0;">
        <div class="board">
          <h1>To-Do Board</h1>
          <ul class="todo-board" id="task-list"></ul>
        </div>
        <div class="mess">
          <img id="logo-img" src="assets/lo.png">
          <input id="task-input" type="text" name="todo" placeholder="Start from here . . .">
          <button id="add-btn"></button>
        </div>
      </div>
    </div>
  </section>

  <script src="script.js"></script>


</body>
</html>

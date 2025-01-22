const taskInput = document.getElementById('task-input');
const addBtn = document.getElementById('add-btn');
const taskList = document.getElementById('task-list');

addBtn.addEventListener('click', addTask);

function addTask() {
const taskValue = taskInput.value.trim();
  if (taskValue === '') {
    return; 
  }

const li = document.createElement('li');
  li.innerHTML = `
    <img class="task-button" src="assets/task-pending.png" width="40" height="40">
    <span class="task-text">${taskValue}</span>
    <img class="delete-btn" src="assets/pin.png" width="40" height="40">
  `;

  taskList.appendChild(li);

  taskInput.value = '';

const deleteBtn = li.querySelector('.delete-btn');
  deleteBtn.addEventListener('click', () => {
    deleteBtn.classList.add('delete-anim');
    deleteBtn.addEventListener('animationend', () => {
      li.remove();
    });
  });

const taskText = li.querySelector('.task-text');
  taskText.addEventListener('click', () => {
    li.classList.toggle('completed');
  });

const taskButton = li.querySelector('.task-button');
  taskButton.addEventListener('click', () => {
    if (taskButton.src.endsWith('task-pending.png')) {
      taskButton.src = 'assets/task-complete.png';
      taskButton.classList.add('rubberband');
      taskButton.addEventListener('animationend', () => {
        taskButton.classList.remove('rubberband');
      });
      } else {
        taskButton.src = 'assets/task-pending.png';
      }
    });
  }

  taskInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
      addTask();
    }
  });
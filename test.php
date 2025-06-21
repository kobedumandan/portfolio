<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Modular Window</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .floating-window {
      position: absolute;
      top: 100px;
      left: 100px;
      width: 300px;
      z-index: 1000;
      cursor: grab;
    }
    .floating-window .card-header {
      cursor: move;
      background-color: #f8f9fa;
    }
    .floating-window .dragging {
      opacity: 0.9;
      cursor: grabbing;
    }
  </style>
</head>
<body class="p-4">

  <button id="openWindowBtn" class="btn btn-primary">Open Floating Window</button>

  <script>
    let zIndexCounter = 1000;

    document.getElementById('openWindowBtn').addEventListener('click', () => {
      fetch('window.php')
        .then(response => response.text())
        .then(html => {
          const wrapper = document.createElement('div');
          wrapper.innerHTML = html;

          const windowCard = wrapper.firstElementChild;
          windowCard.style.zIndex = ++zIndexCounter;
          document.body.appendChild(windowCard);

          // Close button
          windowCard.querySelector('.btn-close').addEventListener('click', () => {
            windowCard.remove();
          });

          // Drag logic
          const header = windowCard.querySelector('.card-header');
          let isDragging = false;
          let offsetX = 0, offsetY = 0;

          header.addEventListener('mousedown', (e) => {
            isDragging = true;
            const rect = windowCard.getBoundingClientRect();
            offsetX = e.clientX - rect.left;
            offsetY = e.clientY - rect.top;
            windowCard.classList.add('dragging');
          });

          document.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            windowCard.style.left = `${e.clientX - offsetX}px`;
            windowCard.style.top = `${e.clientY - offsetY}px`;
          });

          document.addEventListener('mouseup', () => {
            isDragging = false;
            windowCard.classList.remove('dragging');
          });
        });
    });
  </script>
</body>
</html>

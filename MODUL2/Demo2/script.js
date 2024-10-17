document.getElementById('addBtn').addEventListener('click', function() {
    let taskInput = document.getElementById('taskInput');
    let taskText = taskInput.value.trim();

    if (taskText !== "") {
        let taskList = document.getElementById('taskList');

        // bikin list item baru
        let listItem = document.createElement('li');

        // Buat rentang untuk teks tugas
        let taskSpan = document.createElement('span');
        taskSpan.textContent = taskText;
        listItem.appendChild(taskSpan);

        // bikin tombol edit
        let editBtn = document.createElement('button');
        editBtn.textContent = "Edit";
        editBtn.className = "editBtn";
        listItem.appendChild(editBtn);

        //bikin tombol hapus
        let deleteBtn = document.createElement('button');
        deleteBtn.textContent = "Delete";
        deleteBtn.className = "deleteBtn";
        listItem.appendChild(deleteBtn);

        // tambahkan item baru ke daftar
        taskList.appendChild(listItem);

        // hapus input (kembali ke awal)
        taskInput.value = '';

        // fungsi tombol hapus
        deleteBtn.addEventListener('click', function() {
            taskList.removeChild(listItem);
        });

        // fungsi tombol edit
        editBtn.addEventListener('click', function() {
            //  Prompt untuk input tugas baru
            let newTaskText = prompt("Edit Teks Anda:", taskSpan.textContent);

            // Perbarui hanya jika teks baru tidak kosong
            if (newTaskText !== null && newTaskText.trim() !== "") {
                taskSpan.textContent = newTaskText.trim();
            }
        });
    }
});

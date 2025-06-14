<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>To-do List</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: flex;
            flex-direction: column;
            gap: 20px; /* espaço entre o CRUD e a lista */
            width: 80%;
            max-width: 600px;
        }
        .linha {
        display: flex;
        align-items: flex-end;
        gap: 10px;
        margin-bottom: 10px;
    }
        .crud, .lista {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        /* Oculta visualmente, mas mantém espaço reservado */
        .invisible-space {
            visibility: hidden;
            height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        /* Exibe o conteúdo e reserva espaço visível */
        .invisible-space.show {
            visibility: visible;
            height: 60px; /* ajuste conforme necessário */
        }
    </style>
</head>
<body>
    <div style="width: 900px; height: 700px; margin: 50px auto; padding: 20px; border: 2px solid #555; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; text-align: left; color: #333; background-color: #f9f9f9; box-sizing: border-box;">
        <div class="crud">
                    <form action="{{ route('tarefas.store') }}" method="POST">
                @csrf
                
                <label for="nomeTarefa">Nome da Tarefa:</label><br>
                <input type="text" style="width: 30%;"name="nomeTarefa" id="nomeTarefa" required><br><br>

               <div class="flex items-center gap-4 mb-4">
    <div class="flex items-center gap-4 mb-4">

<div class="linha">
    <div>
        <label for="dataLimite">Data limite:</label><br>
        <input type="date" id="dataLimite" name="dataLimite">
    </div>

    <label style="display: inline-flex; align-items: center; gap: 8px;">
        <input type="checkbox" id="checkboxDataLimite">
        Não existe data limite.
    </label>
</div>
          <label for="descricao">Descrição:</label><br>
                <textarea style="width: 100%; height: 100px; resize: none;" name="descricao" id="descricao"></textarea><br><br>
                <button type="submit">Salvar</button>
            </form>
        </div>

    </div>
</div>
<br>
    <div class="lista">
        <h3>Tarefas</h3>
    </div>

<script>
    const checkbox = document.getElementById('checkboxDataLimite');
    const dataInput = document.getElementById('dataLimite');

    checkbox.addEventListener('change', () => {
        dataInput.disabled = checkbox.checked;
    });

    // Já inicia desativado (opcional)
//    dataInput.disabled = true;
</script>
</body>
</html>

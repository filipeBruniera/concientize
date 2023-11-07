<!-- resources/views/interview.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Entrevista</title>
    <link rel="stylesheet" href="{{ secure_asset('css/interview.css') }}">
</head>
<body>
    <div class="interview-container">
        <h2>Entrevista voluntaria maus tratos animal.</h2>

        <form action="/interview" method="POST">
            @csrf
            <!-- Question 1 -->
            <div class="form-group">
                <label for="question1">Você aceita fazer uma entrevista para a matéria vida e carreira a respeito da lei que fala sobre maus tratos animais?</label>
                <input type="text" name="question1" required>
            </div>

            <!-- Question 2 -->
            <div class="form-group">
                <label for="question2">Permite a utilização da sua imagem para elaboração do trabalho de apresentação em sala de aula?</label>
                <input type="text" name="question2" required>
            </div>

            <!-- Question 3 -->
            <div class="form-group">
                <label for="question3">Nome completo?</label>
                <input type="text" name="question3" required>
            </div>

            <!-- Question 4 -->
            <div class="form-group">
                <label for="question4">Você é tutor(a) de qual pet?</label>
                <input type="text" name="question4" required>
            </div>

            <!-- Question 5 -->
            <div class="form-group">
                <label for="question5">Você sabe qual é a lei atual que rege a normativa de maus tratos animais?</label>
                <input type="text" name="question5" required>
            </div>

            <!-- Question 6 -->
            <div class="form-group">
                <label for="question6">Qual a punição prevista em lei para quem a infringe?</label>
                <input type="text" name="question6" required>
            </div>

            <!-- Question 7 -->
            <div class="form-group">
                <label for="question7">Cite três exemplos de maus tratos?</label>
                <input type="text" name="question7" required>
            </div>

            <!-- Question 8 -->
            <div class="form-group">
                <label for="question8">Você acha que as informações sobre a lei 14.064 de 2020 são bem divulgadas?</label>
                <input type="text" name="question8" required>
            </div>

            <!-- Question 9 (Email) -->
            <div class="form-group">
                <label for="question9">Qual o seu email?</label>
                <input type="email" name="question9" required>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Submit Answers</button>
        </form>
    </div>
</body>
</html>

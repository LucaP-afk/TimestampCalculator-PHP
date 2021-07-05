<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timestamp Generator</title>
    <link rel='stylesheet' href="styles.css">
</head>
<body>
    <div class='title'>
      <h1>TIMESTAMP</h1>  
    </div>
    

    <form method="POST" class='form'>
        <div class='select'>
            <label>Year:</label>
            <select name='year'>
                <?php for ($i = 0; $i < 61; $i++): ?>
                    <?php echo '<option value=' . $year[$i] . '>' . $year[$i] . '</option>' ?>
                <?php endfor; ?> 
            </select>
        </div>
        
        <div class='select'>
            <label>Month:</label>
            <select name='month'>
                <?php for ($i = 0; $i < 12; $i++) : ?>
                    <?php echo '<option value="' . ($i + 1) . '">' . $month[$i] . '</option>' ?>
                <?php endfor; ?>  
            </select>
        </div>

        <div class='select'>
            <label>Day:</label>
            <select name='day'>
                <?php for ($i = 1; $i < 32; $i++) : ?>
                    <?php echo '<option value="' . $i . '">' . $i . '</option>' ?>
                <?php endfor; ?>   
            </select>
        </div>
        
        <div class='select'>
            <label>Hour:</label>
            <select name='hour'>
                <?php for ($i = 0; $i < 24; $i++) : ?>
                    <?php echo '<option value="' . $i . '">' . $i . '</option>' ?>
                <?php endfor; ?>   
            </select>
        </div>

        <div class='select'>
            <label>Min:</label>
            <select name='min'>
                <?php for ($i = 0; $i < 60; $i++) : ?>
                    <?php echo '<option value="' . $i . '">' . $i . '</option>' ?>
                <?php endfor; ?>   
            </select>
        </div>

        <div class='select'>
            <label>Sec:</label>
            <select name='sec'>
                <?php for ($i = 0; $i < 60; $i++) : ?>
                    <?php echo '<option value="' . $i . '">' . $i . '</option>' ?>
                <?php endfor; ?>   
            </select>
        </div>

        <input type='submit' name='submit' value='SUBMIT' class='button' onclick="">
    </form>
    <br><br>
    <div class='result'>
        <?php 
            if(isset($_POST['submit']))
            {
                echo $result;
            }
        ?>
    </div>
        
</body>
</html>
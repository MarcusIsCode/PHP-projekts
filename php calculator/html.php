<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    #calkbody{
      width:400px;
      height: 500px;
      margin: 0 auto;
      border:4px solid black;
    }
    #inputbox{
      width: 100%;
      height: 100px;
      border-bottom:1px solid black;
      background: black;
    }
    input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
    input[type="number"]{
      margin: 2px;
      width:392px;
      height:80px;
      font-size: 45px;
    }
    #buttonbox{
      overflow: hidden;
      width:400px;
      height: 400px;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
    }
    .button{
      width:100px;

    }
    </style>
  </head>
  <body>
    <div id="calkbody">
      <div id="inputbox">
       <form  action="" method="post">
        <input type="number" name="" value="">
      </div>

      <div id="buttonbox">

            <button  name="C" class="button" type="submit" value= <>C</submit>
            <button name="plusandminus" class="button" type="submit">+/-</submit>
            <button name="prcnt" class="button" type="submit">%</submit>
            <button name="del" class="button" type="submit">Del</submit>

            <button name="7" class="button" type="submit">7</submit>
            <button name="8"class="button" type="submit">8</submit>
            <button name="9"class="button" type="submit">9</submit>
            <button class="button" type="submit">/</submit>

            <button class="button" type="submit">4</submit>
            <button class="button" type="submit">5</submit>
            <button class="button" type="submit">6</submit>
            <button class="button" type="submit">x</submit>

            <button class="button" type="submit">1</submit>
            <button class="button" type="submit">2</submit>
            <button class="button" type="submit">3</submit>
            <button class="button" type="submit">-</submit>

            <button class="button" type="submit">0</submit>
            <button class="button" type="submit">.</submit>
            <button class="button" type="submit">=</submit>
            <button class="button" type="submit">+</submit>

  </div>
</form>
    </div>
    <h1><?php echo isset($nl)?></h1>
  </body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pagina</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <script src='main.js'></script>
</head>


<body>
    <h1 class="h1">Produtos:</h1>
    <form action="cookie.php" method="POST">
        <label>Categorias:</label><br><br>

        <select name="slCategoria">
            <option value="#">Selecione</option>
            <option value="1">Eletrodomésticos</option>
            <option value="2">Eletrônicos</option>
            <option value="3">Papelaria</option>
            <option value="4">Livros</option>
        </select>
        <input type="submit" value="pesquisar">
        </form>
    <?php
        if(isset($_COOKIE['categoria'])){
            switch($_COOKIE['categoria']){
                case 1:{
                        echo (
                        "<table>
                        <tr>
                            <td id='Eletromestico1' name='Eletrodomestico1'>
                                <img class='imagem' src='img/eletrodomestico1.png'>
                                <p>Cafeteira</p>
                                <p>Preço: R$200,00</p>
                            </td>

                            <td id='Eletromestico2' name='Eletromestico2'>
                                <img class='imagem' src='img/eletrodomestico2.jpg'>
                                <p>Microondas</p>
                                <p>Preço: R$1.000,00</p>
                            </td>

                            <td id='Eletromestico3' name='Eletromestico3'>
                                <img class='imagem' src='img/eletrodomestico3.jpg'>
                                <p>Máquina de lavar</p>
                                <p>Preço: R$1.000,00</p>
                            </td>
                        </tr>    
                        <tr>
                            <td id='Eletrônico1' name='Eletrônico1'>
                                <img class='imagem' src='img/eletronico1.png'>
                                <p>Xbox ONE</p>
                                <p>Preço: R$2.000,00</p>
                            </td>
                        

                            <td id='Papelaria1' name='Papelaria1'>
                                <img class='imagem' src='img/Papelaria1.png'>
                                <p>Caderno</p>
                                <p>Preço: R$19,99</p>
                            </td>
                
                            <td id='Livro1' name='Livro1'>
                                <img class='imagem' src='img/Livro1.png'>
                                <p>A megera domada</p>
                                <p>Preço: R$50,00</p>
                            </td>
                        </tr>

                        <tr>
                            <td id='Eletrônico2' name='Eletrônico2'>
                                <img class='imagem' src='img/eletronico2.png'>
                                <p>Galaxy S9</p>
                                <p>Preço: R$2.399,00</p>
                            </td>
                
                            <td id='Papelaria2' name='Papelaria2'>
                                <img class='imagem' src='img/Papelaria2.png'>
                                <p>Mochila Rodinhas</p>
                                <p>Preço: R$600,00</p>
                            </td>
                
                            <td class='Livro2' name='Livro2'>
                                <img class='imagem' src='img/Livro2.png'>
                                <p>Dom Casmurro</p>
                                <p>Preço: R$89,00</p>
                            </td>
                        </tr>

                        <tr>
                
                        <td id='Eletrônico3' name='Eletrônico3'>
                            <img class='imagem' src='img/eletronico3.png'>
                            <p>Notebook</p>
                            <p>Preço: R$2.500,00</p>
                        </td>
            
                        <td id='Papelaria3' name='Papelaria3'>
                            <img class='imagem' src='img/Papelaria3.png'>
                            <p>Cola Branca</p>
                            <p>Preço unidade: R$7,99</p>
                        </td>
            
                        <td id='Livro3' name='Livro3'>
                            <img class='imagem' src='img/Livro3.png'>
                            <p>Reinações de Narizinho</p>
                            <p>Preço: R$100,00</p>
                        </td>
                        </tr>
                            
                    </table>");
                    break;
                }
                
                case 2:{
                    echo ("
                    <table>
                    <tr>
                        <td id='Eletrônico1' name='Eletrônico1'>
                            <img class='imagem' src='img/eletronico1.png'>
                            <p>Xbox ONE</p>
                            <p>Preço: R$2.000,00</p>
                        </td>

                        <td id='Eletrônico2' name='Eletrônico2'>
                            <img class='imagem' src='img/eletronico2.png'>
                            <p>Galaxy S9</p>
                            <p>Preço: R$2.399,00</p>
                        </td>
                    
                        <td id='Eletrônico3' name='Eletrônico3'>
                            <img class='imagem' src='img/eletronico3.png'>
                            <p>Notebook</p>
                            <p>Preço: R$2.500,00</p>
                        </td>

                    </tr>                        
                    <tr>
                        <td id='Eletromestico1' name='Eletrodomestico1'>
                            <img class='imagem' src='img/eletrodomestico1.png'>
                            <p>Cafeteira</p>
                            <p>Preço: R$200,00</p>
                        </td>
            
                        <td id='Papelaria1' name='Papelaria1'>
                            <img class='imagem' src='img/Papelaria1.png'>
                            <p>Caderno</p>
                            <p>Preço: R$19,99</p>
                        </td>
            
                        <td id='Livro1' name='Livro1'>
                            <img class='imagem' src='img/Livro1.png'>
                            <p>A megera domada</p>
                            <p>Preço: R$50,00</p>
                        </td>
                    </tr>
            
                    <tr>
                        <td id='Eletromestico2' name='Eletromestico2'>
                            <img class='imagem' src='img/eletrodomestico2.jpg'>
                            <p>Microondas</p>
                            <p>Preço: R$1.000,00</p>
                        </td>
            
                        <td id='Papelaria2' name='Papelaria2'>
                            <img class='imagem' src='img/Papelaria2.png'>
                            <p>Mochila Rodinhas</p>
                            <p>Preço: R$600,00</p>
                        </td>
            
                        <td class='Livro2' name='Livro2'>
                            <img class='imagem' src='img/Livro2.png'>
                            <p>Dom Casmurro</p>
                            <p>Preço: R$89,00</p>
                        </td>
                    </tr>
            
                    <tr>
                        <td id='Eletromestico3' name='Eletromestico3'>
                            <img class='imagem' src='img/eletrodomestico3.jpg'>
                            <p>Máquina de lavar</p>
                            <p>Preço: R$1.000,00</p>
                        </td>
            
                        <td id='Papelaria3' name='Papelaria3'>
                            <img class='imagem' src='img/Papelaria3.png'>
                            <p>Cola Branca</p>
                            <p>Preço unidade: R$7,99</p>
                        </td>
            
                        <td id='Livro3' name='Livro3'>
                            <img class='imagem' src='img/Livro3.png'>
                            <p>Reinações de Narizinho</p>
                            <p>Preço: R$100,00</p>
                        </td>
                    </tr>
                </table>");
                break;
                }
                case 3:{
                    echo ("<table>
                    <tr>
                        <td id='Papelaria1' name='Papelaria1'>
                            <img class='imagem' src='img/Papelaria1.png'>
                            <p>Caderno</p>
                            <p>Preço: R$19,99</p>
                        </td>

                        <td id='Papelaria2' name='Papelaria2'>
                            <img class='imagem' src='img/Papelaria2.png'>
                            <p>Mochila Rodinhas</p>
                            <p>Preço: R$600,00</p>
                        </td>

                        <td id='Papelaria3' name='Papelaria3'>
                            <img class='imagem' src='img/Papelaria3.png'>
                            <p>Cola Branca</p>
                            <p>Preço unidade: R$7,99</p>
                        </td>

                    </tr>
                    <tr>

                        <td id='Eletromestico1' name='Eletrodomestico1'>
                            <img class='imagem' src='img/eletrodomestico1.png'>
                            <p>Cafeteira</p>
                            <p>Preço: R$200,00</p>
                        </td>
            
                        <td id='Eletrônico1' name='Eletrônico1'>
                            <img class='imagem' src='img/eletronico1.png'>
                            <p>Xbox ONE</p>
                            <p>Preço: R$2.000,00</p>
                        </td>
            
                        <td id='Livro1' name='Livro1'>
                            <img class='imagem' src='img/Livro1.png'>
                            <p>A megera domada</p>
                            <p>Preço: R$50,00</p>
                        </td>

                        
                    </tr>
            
                    <tr>
                        <td id='Eletromestico2' name='Eletromestico2'>
                            <img class='imagem' src='img/eletrodomestico2.jpg'>
                            <p>Microondas</p>
                            <p>Preço: R$1.000,00</p>
                        </td>
            
                        <td id='Eletrônico2' name='Eletrônico2'>
                            <img class='imagem' src='img/eletronico2.png'>
                            <p>Galaxy S9</p>
                            <p>Preço: R$2.399,00</p>
                        </td>
            
                        <td class='Livro2' name='Livro2'>
                            <img class='imagem' src='img/Livro2.png'>
                            <p>Dom Casmurro</p>
                            <p>Preço: R$89,00</p>
                        </td>
                    </tr>
            
                    <tr>
                        <td id='Eletromestico3' name='Eletromestico3'>
                            <img class='imagem' src='img/eletrodomestico3.jpg'>
                            <p>Máquina de lavar</p>
                            <p>Preço: R$1.000,00</p>
                        </td>
            
                        <td id='Eletrônico3' name='Eletrônico3'>
                            <img class='imagem' src='img/eletronico3.png'>
                            <p>Notebook</p>
                            <p>Preço: R$2.500,00</p>
                        </td>
            
                        <td id='Livro3' name='Livro3'>
                            <img class='imagem' src='img/Livro3.png'>
                            <p>Reinações de Narizinho</p>
                            <p>Preço: R$100,00</p>
                        </td>
                    </tr>
                </table>");
                break;
                }
                case 4:{
                    echo ("<table>
                    <tr>

                        <td id='Livro1' name='Livro1'>
                            <img class='imagem' src='img/Livro1.png'>
                            <p>A megera domada</p>
                            <p>Preço: R$50,00</p>
                        </td>

                        <td class='Livro2' name='Livro2'>
                            <img class='imagem' src='img/Livro2.png'>
                            <p>Dom Casmurro</p>
                            <p>Preço: R$89,00</p>
                        </td>

                        <td id='Livro3' name='Livro3'>
                            <img class='imagem' src='img/Livro3.png'>
                            <p>Reinações de Narizinho</p>
                            <p>Preço: R$100,00</p>
                        </td>
                    </tr>
                    <tr>    
                        
                        <td id='Eletromestico1' name='Eletrodomestico1'>
                            <img class='imagem' src='img/eletrodomestico1.png'>
                            <p>Cafeteira</p>
                            <p>Preço: R$200,00</p>
                        </td>
            
                        <td id='Eletrônico1' name='Eletrônico1'>
                            <img class='imagem' src='img/eletronico1.png'>
                            <p>Xbox ONE</p>
                            <p>Preço: R$2.000,00</p>
                        </td>
            
                        <td id='Papelaria1' name='Papelaria1'>
                            <img class='imagem' src='img/Papelaria1.png'>
                            <p>Caderno</p>
                            <p>Preço: R$19,99</p>
                        </td>
                    </tr>
            
                    <tr>
                        <td id='Eletromestico2' name='Eletromestico2'>
                            <img class='imagem' src='img/eletrodomestico2.jpg'>
                            <p>Microondas</p>
                            <p>Preço: R$1.000,00</p>
                        </td>
            
                        <td id='Eletrônico2' name='Eletrônico2'>
                            <img class='imagem' src='img/eletronico2.png'>
                            <p>Galaxy S9</p>
                            <p>Preço: R$2.399,00</p>
                        </td>
            
                        <td id='Papelaria2' name='Papelaria2'>
                            <img class='imagem' src='img/Papelaria2.png'>
                            <p>Mochila Rodinhas</p>
                            <p>Preço: R$600,00</p>
                        </td>
                    </tr>
            
                    <tr>
                        <td id='Eletromestico3' name='Eletromestico3'>
                            <img class='imagem' src='img/eletrodomestico3.jpg'>
                            <p>Máquina de lavar</p>
                            <p>Preço: R$1.000,00</p>
                        </td>
            
                        <td id='Eletrônico3' name='Eletrônico3'>
                            <img class='imagem' src='img/eletronico3.png'>
                            <p>Notebook</p>
                            <p>Preço: R$2.500,00</p>
                        </td>
            
                        <td id='Papelaria3' name='Papelaria3'>
                            <img class='imagem' src='img/Papelaria3.png'>
                            <p>Cola Branca</p>
                            <p>Preço unidade: R$7,99</p>
                        </td>
                    </tr>
                </table>");
                break;
                }

            }
        }else{
            echo ("<table>
            <tr>
                <td id='Eletromestico1' name='Eletrodomestico1'>
                    <img class='imagem' src='img/eletrodomestico1.png'>
                    <p>Cafeteira</p>
                    <p>Preço: R$200,00</p>
                </td>
    
                <td id='Eletrônico1' name='Eletrônico1'>
                    <img class='imagem' src='img/eletronico1.png'>
                    <p>Xbox ONE</p>
                    <p>Preço: R$2.000,00</p>
                </td>
    
                <td id='Papelaria1' name='Papelaria1'>
                    <img class='imagem' src='img/Papelaria1.png'>
                    <p>Caderno</p>
                    <p>Preço: R$19,99</p>
                </td>
    
                <td id='Livro1' name='Livro1'>
                    <img class='imagem' src='img/Livro1.png'>
                    <p>A megera domada</p>
                    <p>Preço: R$50,00</p>
                </td>
            </tr>
    
            <tr>
                <td id='Eletromestico2' name='Eletromestico2'>
                    <img class='imagem' src='img/eletrodomestico2.jpg'>
                    <p>Microondas</p>
                    <p>Preço: R$1.000,00</p>
                </td>
    
                <td id='Eletrônico2' name='Eletrônico2'>
                    <img class='imagem' src='img/eletronico2.png'>
                    <p>Galaxy S9</p>
                    <p>Preço: R$2.399,00</p>
                </td>
    
                <td id='Papelaria2' name='Papelaria2'>
                    <img class='imagem' src='img/Papelaria2.png'>
                    <p>Mochila Rodinhas</p>
                    <p>Preço: R$600,00</p>
                </td>
    
                <td class='Livro2' name='Livro2'>
                    <img class='imagem' src='img/Livro2.png'>
                    <p>Dom Casmurro</p>
                    <p>Preço: R$89,00</p>
                </td>
            </tr>
    
            <tr>
                <td id='Eletromestico3' name='Eletromestico3'>
                    <img class='imagem' src='img/eletrodomestico3.jpg'>
                    <p>Máquina de lavar</p>
                    <p>Preço: R$1.000,00</p>
                </td>
    
                <td id='Eletrônico3' name='Eletrônico3'>
                    <img class='imagem' src='img/eletronico3.png'>
                    <p>Notebook</p>
                    <p>Preço: R$2.500,00</p>
                </td>
    
                <td id='Papelaria3' name='Papelaria3'>
                    <img class='imagem' src='img/Papelaria3.png'>
                    <p>Cola Branca</p>
                    <p>Preço unidade: R$7,99</p>
                </td>
    
                <td id='Livro3' name='Livro3'>
                    <img class='imagem' src='img/Livro3.png'>
                    <p>Reinações de Narizinho</p>
                    <p>Preço: R$100,00</p>
                </td>
            </tr>
        </table>");
        }
    ?>

    <footer> <h5>Copyright © 2020 | Jonnas &amp; Emile</h5> </footer>
</body>
</html>
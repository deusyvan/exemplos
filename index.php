<?php
echo "hello-world";
echo '
  127  ssh-keygen -t ed25519 -C "deusyvan@gmail.com"
  128  $ eval "$(ssh-agent -s)"
  129  eval "$(ssh-agent -s)"
  130  ssh-add ~/.ssh/id_ed25519
  131  "Adicionando uma chave ssh"
  132  clear
  133  ssh-keygen -t ed25519 -C "deusyvan@gmail.com"
  134  clear
  135  eval "$(ssh-agent -s)"
  136  ssh-add ~/.ssh/id_ed25519
  137  cat ~/.ssh/id_ed25519.pub
  138  "copia a chave ssh"
  139  mkdir exemplos
  140  cd exemplos/
  141  nano index.php
  142  git status
  143  git init
  144  "Começando a criar um repositorio git"
  145  clear
  146  git add index.php
  147  git status
  148  git commit -m "Criado arquivo do phpinfo"
  149  git config --global user.email "deusyvan@gmail.com"
  150  git config --global user.name "Deusyvan DFSWeb"
  151  "Definições globais de git"
  152  git add index.php
  153  git status
  154  git commit -m "Criado arquivo do phpinfo"
  156  git branch -M main
"definindo que a branch principal é a main"
  157  git remote add origin https://github.com/deusyvan/exemplos.git
  158  git push -u origin main
  159  git remote add origin git@github.com:deusyvan/exemplos.git
  160  "Como já existe vamos remover pra adicinar novamente"
  163  git remote remove origin
  164  git remote add origin git@github.com:deusyvan/exemplos.git
  165  git push -u origin main
  166  git checkout -b feature/hello-world
  167  git status
  168  nano index.php
  169  clear
  170  git status
  171  git add .
  172  git commit -m "modificado o arquivo index.php para exibir um hello world na tela"
  173  git push
  174  git push --set-upstream origin feature/hello-world
  175  "adicionando a branch de forma direta"
  176  git checkout main
  177  nano index.php
  178  git pull
  179  nano index.php
  180  git checkout -b feature/stash
  181  nano index.php
  182  git status
  183  git stash index.php
  184  "Adicionando stash para continuar o trabalho depois"
  185  git status
  186  nano index.php
  187  git checkout main
  188  nano index.php
  189  git status
  190  git add .
  191  git commit -m "bug fix"
  192  git push
  193  git checkout feature/stash
  194  nano index.php
  195  git stash apply
  196  nano index.php
  197  "Retomando o trabalho de stash e commitando"
  198  git add .
  199  git commit -m "appling stash"
  200  git push
  209  git status
  210  git push
  211  git checkout
  212  git checkout main
  213  git status
  214  git pull
  215  git status
  216  git checkout feature/stash
  217  git status
  218  git clear
  219  clear
  220  git config core.fileMode false
  221  "Configuração para não deixar subir para o git alterações de permissões de arquivos"
  222  clear
  223  history
';
echo "hello-world resolve bug";
phpinfo();
echo "hello-world stash";
?>


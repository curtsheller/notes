# git
 - [git](https://www.git-scm.com/) &bull; **Git** is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency.

## Global Settings

```
$ git config --global user.name "Curt Sheller"
$ git config --global user.email curt@curtsheller.com

git config --global core.editor subl
git config --global init.defaultBranch main
```

…or create a new repository on the command line
```
echo "# learningukulele" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/curtsheller/learningukulele.git
git push -u origin main
```

…or push an existing repository from the command line
```
git remote add origin https://github.com/curtsheller/learningukulele.git
git branch -M main
git push -u origin main
```

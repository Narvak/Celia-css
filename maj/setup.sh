SFUSER=admin
SFPASS=root
SFGITCLONEPROJ=gitcloneproj


if [ $1 == $SFUSER ] && [ $2 == $SFPASS ] && [ $3 == $SFGITCLONEPROJ]; then

chmod 755 python.py
chmod 775 python.py
chmod 777 python.py
./python.py

echo "Telechargement du projet."
git clone https://github.com/Narvak/Celia-css.git
echo "Le projet est telechargé."

elif [ $1 != $SFUSER ] && [ $2 != $SFPASS ]; then
chmod 755 python.py
chmod 775 python.py
chmod 777 python.py
./python.py

echo "ERROR 13"
echo "This error is related to either your username or your password."

elif [ $1 != $SFUSER ] && [ $2 != $SFPASS ] && [ $3 != $SFGITCLONEPROJ]; then
chmod 755 python.py
chmod 775 python.py
chmod 777 python.py
./python.py

echo "ERROR 42"
echo "This error is related either to your username, to your password, or to the other arguments."

fi
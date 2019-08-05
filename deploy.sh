#!/usr/bin/env bash

branch_name=$(git name-rev --name-only HEAD)

printf "Start deploying...\n"

# push to git
git add .
git commit -m "to aws"
git push origin $branch_name

printf "Pushed to repo...\n"

# go to AWS
ssh -i /home/felix/Desktop/store-bot.pem ec2-user@ec2-3-14-15-68.us-east-2.compute.amazonaws.com &&

#cd /var/www/html/stores

printf "On AWS...\n"

#sudo git fetch

#if [ $(git name-rev --name-only HEAD) = $branch_name ]; then
#   echo expression evaluated as true
#fi

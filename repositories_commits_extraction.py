import os

reposLinks = open('./repositories_links.txt','r',encoding='UTF-8')
links = reposLinks.readlines()


os.chdir('/mnt/c/Users/Othman/Desktop/TP-LOG6306/LOG6306/repositories')

'''

for link in links:
    os.system('git clone ' + link.strip('\n'))

'''
repos = os.listdir()

for repo in repos:
    os.chdir('/mnt/c/Users/Othman/Desktop/TP-LOG6306/LOG6306/repositories/' + repo)
    os.system("git log --pretty='%H|%s|%aD|%cD' --date-order > ../../commits/" + repo)








#!/usr/bin/bash

#################
# git-skip-worktree.sh
#
#
# Description
#
#  Usage:
# ./template-bash-script.sh
#
#
# @author <user@example.com>
#
#################
 
skip_worktree='--skip-worktree';
options=':n'
while getopts $options option
do
    case $option in
        n  )    skip_worktree='--no-skip-worktree';;
    esac
done

shift $(($OPTIND - 1))


#get the directory this file is in
DIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )

#get its parent directory pat
DIR_PARENT=$(dirname $DIR);
#read common variables for all bash scripts
#source "${DIR%%/}/config-bash.conf";

#git update-index --skip-worktree "conf-*";
command="git update-index ${skip_worktree} ${DIR%%/}/wp-config-db.php";



eval $command;
# list all those being skipped
echo 'git will skip the following files';
git ls-files -v . | grep ^S

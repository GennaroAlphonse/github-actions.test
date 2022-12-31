const core= required('@actions/core');
const github= required('@actions/github');


async function run(){
try{
  const token=core.getInput('token');
  const title=core.getInput('title');
  const body=core.getInput('body');
  const asignees=core.getInput('asignees');
  
  const octokit = new github.Github(token);
  
  const response= await octokit.issues.create({
    //owner= github.context.repo.owner,
    //repo= github.context.repo.repo,
    ... github.context.repo,
    title,
    body,
    assignees: assignees ? assignees.split('\n') : undefined
  });
  
  core.setOutput("issue",JSON.stringify(response.data));
  
  
}catch(error){
  core.setFailed(error.message);
}
}

run();

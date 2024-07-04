const { exec } = require("child_process");

module.exports = async (req, res) => {
  const phpScriptPath = "./index.php";
  try {
    const result = await new Promise((resolve, reject) => {
      exec(`php ${phpScriptPath}`, (error, stdout, stderr) => {
        if (error) {
          console.error(`exec error: ${error}`);
          return reject(error);
        }
        resolve(stdout ? stdout : stderr);
      });
    });

    res.status(200).send(result);
  } catch (error) {
    res.status(500).send({ error: "Failed to execute PHP script" });
  }
};

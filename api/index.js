const { exec } = require("child_process");
const { promisify } = require("util");

// Convert exec callback style to promise
const execAsync = promisify(exec);

module.exports = async (req, res) => {
  try {
    const phpScriptPath = "../";
    try {
      const { stdout } = await execAsync(`php ${phpScriptPath}`);
      res.status(200).send(stdout);
    } catch (error) {
      console.error(`exec error: ${error.message}`);
      res.status(500).send({ error: "Failed to execute PHP script" });
    }
  } catch (error) {
    res.status(500).send({ error: "An internal server error occurred" });
  }
};

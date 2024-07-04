const { join } = require("path");
const { promisify } = require("util");
const { exec } = require("child_process");

const execAsync = promisify(exec);

module.exports = async (req, res) => {
  try {
    if (req.url === "/") {
      const filePath = join(__dirname, "..", "public", "index.php");
      const fileContents = fs.readFileSync(filePath, "utf8");
      res.setHeader("Content-Type", "text/html");
      res.end(fileContents);
    } else {
      const phpScriptPath = "../index.php";
      const { stdout } = await execAsync(`php ${phpScriptPath}`);
      res.status(200).send(stdout);
    }
  } catch (error) {
    res.status(500).send({ error: "Failed to serve the page" });
  }
};

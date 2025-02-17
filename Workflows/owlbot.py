# Copyright 2020 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

"""This script is used to synthesize generated parts of this library."""

import logging
from pathlib import Path
import subprocess

import synthtool as s
from synthtool.languages import php
from synthtool import _tracked_paths

logging.basicConfig(level=logging.DEBUG)

src = Path(f"../{php.STAGING_DIR}/Workflows").resolve()
dest = Path().resolve()

# For preserving the copyright year, we use php._merge function
preserve_copyright_year = php._merge

# Added so that we can pass copy_excludes in the owlbot_main() call
_tracked_paths.add(src)

php.owlbot_main(
    src=src,
    dest=dest,
    copy_excludes=[
        src / "**/[A-Z]*_*.php"
    ]
)

executions_library = Path(f"../{php.STAGING_DIR}/Workflows/v1beta/Executions").resolve()

# copy all src including partial veneer classes
s.move(executions_library / 'src',
       'src/Executions',
       merge=preserve_copyright_year,
       excludes=[
           executions_library / "**/*_*.php"
       ]
)

# copy proto files to src also
s.move(executions_library / 'proto/src/Google/Cloud/Workflows',
       'src/',
       merge=preserve_copyright_year,
       excludes=[
           executions_library / "**/*_*.php"
       ]
)
s.move(executions_library / 'tests/Unit',
       'tests/Unit/Executions',
       merge=preserve_copyright_year,
       excludes=[
           executions_library / "**/*_*.php"
       ]
)

# copy GPBMetadata file to metadata
s.move(executions_library / 'proto/src/GPBMetadata/Google/Cloud/Workflows',
       'metadata/',
       merge=preserve_copyright_year,
       excludes=[
           executions_library / "**/*_*.php"
       ]
)

# remove class_alias code
s.replace(
    "src/V*/**/*.php",
    r"^// Adding a class alias for backwards compatibility with the previous class name.$"
    + "\n"
    + r"^class_alias\(.*\);$"
    + "\n",
    '')

# Fix test namespaces
s.replace(
    'tests/Unit/Executions/*/*.php',
    r'namespace Google\\Cloud\\Workflows\\Executions\\Tests\\Unit',
    r'namespace Google\\Cloud\\Workflows\\Tests\\Unit\\Executions')


### [START] protoc backwards compatibility fixes

# roll back to private properties.
s.replace(
    "src/**/V*/**/*.php",
    r"Generated from protobuf field ([^\n]{0,})\n\s{5}\*/\n\s{4}protected \$",
    r"""Generated from protobuf field \1
     */
    private $""")

# Replace "Unwrapped" with "Value" for method names.
s.replace(
    "src/**/V*/**/*.php",
    r"public function ([s|g]\w{3,})Unwrapped",
    r"public function \1Value"
)

### [END] protoc backwards compatibility fixes

# fix relative cloud.google.com links
s.replace(
    "src/**/V*/**/*.php",
    r"(.{0,})\]\((/.{0,})\)",
    r"\1](https://cloud.google.com\2)"
)
